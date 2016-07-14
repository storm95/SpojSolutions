
<?php 
	function query_col($table_name, $col_select_name, $col_problem_code_val)
	{
		$table_name= mysql_real_escape_string($table_name);
		$col_select_name= mysql_real_escape_string($col_select_name);
		$col_problem_code_val= mysql_real_escape_string($col_problem_code_val);
		
		$query= "select `".$col_select_name."` from `".$table_name."` where `problem_code` = '".$col_problem_code_val."'";
		if(@$query_run= mysql_query($query))
		{
			while(@$query_row= mysql_fetch_assoc($query_run))
			{
				return htmlentities($query_row[$col_select_name]);
			}

			return false;
		}
		else
		{
			return 'Select Query didnot run';
		}
	}

	function query_problem_code($get_problem_code)
	{
		global $table_name, $col_problem_code;
		return query_col($table_name, $col_problem_code, $get_problem_code);
	}

	function query_problem_url($get_problem_code)
	{
		global $problem_url_prefix, $table_name, $col_problem_url;
		//return query_col($table_name, $col_problem_url, $get_problem_code);
		return ($problem_url_prefix.$get_problem_code.'/');
	}

	function query_solution($get_problem_code)
	{
		global $table_name, $col_solution;
		return htmlentities(file_get_contents('all_ac_submissions\\'.$get_problem_code.'\\'.$get_problem_code.'.cpp') );
		//return query_col($table_name, $col_solution, $get_problem_code);
	}

	function query_language($get_problem_code)
	{
		global $table_name, $col_language;
		//return (file_get_contents('xx.cpp'));
		return query_col($table_name, $col_language, $get_problem_code);
	}

	function get_solution_url($problem_code_htmlentities_done)
	{
		global $solution_php;
		$solution_url= $solution_php.'?problem_code='.$problem_code_htmlentities_done;
		return $solution_url;
	}
?>