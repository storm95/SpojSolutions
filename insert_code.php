<?php
	$define_variables_php= 'define_variables.php';

	require $define_variables_php;
	require $db_connect_php;
	require $query_code_problem_php;
?>

<html>
	<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link href="css/insert_code.css" rel="stylesheet" type="text/css">
	</head>

	<?php
		if((isset($_GET['problem_code']) && !empty($_GET['problem_code']))  
			&&(isset($_GET['language']) && !empty($_GET['language'])) 
			)
		{
			$get_problem_code= mysql_real_escape_string($_GET['problem_code']);
			$get_language= mysql_real_escape_string($_GET['language']);

			$query= 'INSERT INTO  `'.$db_name.'`.`'.$table_name.'` (
					`'.$col_problem_code.'` ,
					`'.$col_language.'` ,
					`'.$col_visible.'`
					)
					VALUES (
						"'.$get_problem_code.'",  "'.$get_language.'",  "1"
					)';
			
			if(@mysql_query($query))
			{
				die('Inserted Solution for problem code= '.$get_problem_code);
			}
			else
			{
				header($insert_code_php);
			}
		}
	?>

	<body>
		<form action="insert_code.php" method="GET" >
			<input name="problem_code" placeholder="Problem Code"/>
			<br>
			<select name="language">
			  <option value="C++">C++</option>
			  <option value="C++">C</option>
			</select>
			<br>
			<input type="submit" value="Submit"/>
		</form>
	</body>
</html>