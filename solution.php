<?php
	$define_variables_php= 'define_variables.php';

	require $define_variables_php;
	require $db_connect_php;
	require $query_code_problem_php;
	/*$query_code_problem_php has a function which is used by $set_variables_from_get_php so it should be 
		$query_code_problem_php should be required before $set_variables_from_get_php */
	require $set_variables_from_get_php;
	require $add_ipaddress_php;
?>

<html>
	<head>
	
		<?php
			require $metatags_php;
		?>

		<title>Spoj Solutions : <?php echo $get_problem_code; ?></title>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="css">
		<link href="css/custom.css" rel="stylesheet" type="text/css">
		<link href="css/home-page-css.css" rel="stylesheet" type="text/css">
		<script src="js/respond.min.js" type="javascript"></script>
		<link rel="stylesheet" href="css/styles_highlight/default.css">
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
					<div class="question-details">
						<div class="row">
							<div class="CODE-label bold col-xs-2 col-xs-offset-1">
								CODE - 
							</div>
							
							<div class="CODE bold col-xs-9">
								<!--GSS1 -->
								<?php 
									$problem_code= query_problem_code($get_problem_code);
									$problem_url= query_problem_url($get_problem_code);
								?>

								<a class="bold question-url" href="<?php echo $problem_url; ?>" target="_blank">
									<?php echo $problem_code; ?>
								</a>

							</div>
						</div>

						<div class="row">
							<div class="URL-label bold col-xs-2 col-xs-offset-1">
								URL - 
							</div>
							
							<div class="URL bold col-xs-9">
								<a class="bold question-url" href="<?php echo $problem_url; ?>" target="_blank">
									<?php echo $problem_url; ?>
								</a>
							</div>
						</div>

						<div class="row">
							<div class="LANG-label bold col-xs-2 col-xs-offset-1">
								LANGUAGE -
							</div>
							
							<div class="LANG bold col-xs-9">
								<?php 
									$language= query_language($get_problem_code);
									echo $language;
								?>
							</div>
						</div>
					
					</div>

					<div class="SOLUTION-label bold">
						SOLUTION -
					</div>
					
					<div class="SOLUTION">
						<pre>
							<code class="EXACT-SOLUTION">
								<?php 
									$solution= query_solution($get_problem_code);
									echo $solution;
								?>
							</code>
						</pre>
					</div>

				</div>

				<div class="col-xs-3">
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
			include_once("analyticstracking.php");
		?>
		
		<!-- Javascript -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/highlight_js/highlight.pack.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>

	</body>
</html>