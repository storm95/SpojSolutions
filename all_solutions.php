<?php
	$define_variables_php= 'define_variables.php';

	require $define_variables_php;
	require $db_connect_php;
	require $query_code_problem_php;
	require $add_ipaddress_php;
//good code
?>

<html>
	<head>
	
		<?php
			require $metatags_php;
		?>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="css">
		<link href="css/custom.css" rel="stylesheet" type="text/css">
		<link href="css/home-page-css.css" rel="stylesheet" type="text/css">
		<script src="js/respond.min.js" type="javascript"></script>
	</head>

	<body>
		<div id="fb-root"></div>
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1178134082200874',
		      xfbml      : true,
		      version    : 'v2.5'
		    });
		  };

		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		<!--<script src="js/fb_like_share.js" type="javascript"></script>-->


		<?php 
			require $firstview_php;
		?>
		
		<div class="main-content">
			<div class="row">

				<div class="adds col-xs-2">

				</div>

				<div class="col-xs-7">
					<?php

						$query= "select `".$col_problem_code."` from `".$table_name."`";
						
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
						else
							echo null;
					?>

				</div>

				<div class="adds col-xs-3">
					<b>
						If You Wish To Contribute Editorials , contact me on Facebook .
						My Fb profile link is 
						<a href="https://www.facebook.com/krankit007" target="_blank">"https://www.facebook.com/krankit007"</a> .
						Your small contribution can help many !
					</b>
				</div>

			</div>

			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-7">
					<div class="adds">
					</div>
				</div>
				<div class="col-xs-3"></div>
			</div>

		</div>


		<?php 
			require $footer_php;
		?>
		
		<!-- Javascript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>

	</body>
</html>
