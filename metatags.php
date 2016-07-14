<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<?php
	$keywords_content= 'spojsolutions,spoj,solution,spoj solution,spoj code,solution of,code for';

	if(isset($get_problem_code) && !empty($get_problem_code))
	{
		$keywords_content= $get_problem_code.','.$get_problem_code.' solution,'.'spoj '.$get_problem_code.','.$get_problem_code.' code,'
							.$get_problem_code.' algo,'.$get_problem_code.' algorithm,'
							.$get_problem_code.' hint,'.$keywords_content;

		$description_content= 'Solution of spoj problem '.$get_problem_code;
	}
	else
	{
		$description_content= 'Solutions to 400+ spoj problems';
	}

	$echo_element= '<meta name="keywords" content="'.$keywords_content.'" />';
	$echo_element= $echo_element.'<meta name="description" content="'.$description_content.'" />';

	echo $echo_element;
?>

<meta name="author" content="Ankit Kumar">
