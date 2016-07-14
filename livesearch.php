<?php
	$define_variables_php= 'define_variables.php';

	require $define_variables_php;
	require $db_connect_php;
	require $query_code_problem_php;
?>

<?php

	if(isset($_POST['problem_code']))
	{
		$_POST['problem_code']= trim($_POST['problem_code']);

		if(!empty($_POST['problem_code']))
		{
			$search_problem_code= mysql_real_escape_string($_POST['problem_code']);

			$query= "select `".$col_problem_code."` from `".$table_name."` where `problem_code` like '".$search_problem_code."%'";
			
			$suggestion_table= '<table style="width:100%">
									<tr>
										<th>Click On The Problem</th>
									</tr>';

			if(@$query_run= mysql_query($query))
			{
				while(@$query_row= mysql_fetch_assoc($query_run))
				{	
					$query_row[$col_problem_code]= htmlentities($query_row[$col_problem_code]);
					$solution_url= get_solution_url($query_row[$col_problem_code]);
					$suggestion_table .= '<tr>
											<td>
												<a href="'.$solution_url.'">'.$query_row[$col_problem_code].'</a>
											</td>
										</tr>';
				}

				$suggestion_table .= '</table>';

				if(mysql_num_rows($query_run)>0)
					echo $suggestion_table;
				else
					echo null;
			}
		}
		else
		{
			echo null;
		}
	}
	else
	{
		//echo 'post not set';
	}
?>