<?php
	$define_variables_php= 'define_variables.php';

	require $define_variables_php;
	require $db_connect_php;
	require $query_code_problem_php;
?>

<html>
	<head>
	
		<?php
			require $metatags_php;
		?>

		<link href="css/bootstrap.min.css" rel="stylesheet" type="css">
		<link href="css/custom.css" rel="stylesheet" type="text/css">
		<link href="css/home-page-css.css" rel="stylesheet" type="text/css">
		<link href="css/aboutus.css" rel="stylesheet" type="text/css">
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
				<div class="col-xs-3"></div>

				<div class="col-xs-6">
					<div>
						<h1>We will be glad to have feedback and suggestions from you</h1>
					</div>
					<h2>Contact Us</h2>
					<div>
						<div>
							<h3>Ankit Kumar</h3>
						</div>

						<div>
							email- krankit007@gmail.com
						</div>
						
						<div>
							<?php
								include 'social_media_link.php';
							?>
						</div>
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
