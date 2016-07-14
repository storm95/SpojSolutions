<?php
	$host= 'localhost';// '182.50.133.90';
	$user= 'ankit';
	$password= 'My_pass@9304026692';

	$db= 'db_python';
	$table_name= 'pythonpost';

	$db_not_connect_error= 'Sorry we could not connect. Please try again.';

	if(!@mysql_connect($host, $user, $password) || !@mysql_select_db($db))
	{
		die($db_not_connect_error);
	} 
?>

<html>
	<head>
			<meta charset="utf-8"/>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<link href="css/insert_code.css" rel="stylesheet" type="text/css">
	</head>

	<?php
		if(isset($_GET['myname'])
		{
			$query= 'INSERT INTO  `'.$db.'`.`'.$table_name.'` (
					`'.$myname.'`
					)
					VALUES (
						"'.$_GET['myname'].'"
					)';
			
			if(@mysql_query($query))
			{
				die('Inserted name myname= '.$_GET['myname']);
			}
			else
			{
				print('query didnot process');
			}
		}
		else
		{
			print ('get parameter not set');
		}
	?>

</html>