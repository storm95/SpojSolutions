<?php
	//$get_coding_website, $get_problem_code
	if(isset($_GET['problem_code']) && !empty($_GET['problem_code']) )
	{
		$get_problem_code= $_GET['problem_code'];
		$get_problem_code= query_problem_code($get_problem_code);

		if(!$get_problem_code)
		{
			die('Sorry We Dont Have Solution To This Problem');
		}
	}
	else
	{
		$url_index_page= 'http://localhost/website/'; 
		header('Location: '.$url_index_page);
	}
?>