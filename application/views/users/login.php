<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>HIMAMO | LOGIN</title>
		<link href=<?php echo base_url('/assets/css/bootstrap.min.css');?> rel="stylesheet">
		<link href=<?php echo base_url('/assets/css/animate.min.css');?> rel="stylesheet"> 
		<link href=<?php echo base_url('/assets/css/font-awesome.min.css');?> rel="stylesheet">
		<link href=<?php echo base_url('/assets/css/lightbox.css');?> rel="stylesheet">
		<link href=<?php echo base_url('/assets/css/main.css');?> rel="stylesheet">
		<link href=<?php echo base_url('/assets/css/presets/preset1.css');?> rel="stylesheet" id="css-preset">
		<link href=<?php echo base_url('/assets/css/responsive.css');?> rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/png" href=<?php echo base_url('favicon.png');?>>
		<script src="https://use.fontawesome.com/6814ee98ee.js"></script>
	</head><!--/head-->

	<body>
		<header id="home">
			<div class="main-nav navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
							<span class="sr-only">Toggle Navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href=<?php echo base_url();?>>
							<h1><img class="img-responsive" src=<?php echo base_url('assets/images/logo.png');?> alt="logo himamo"></h1>
						</a>
					</div><!--/.navbar-header-->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">                 
						<li class="scroll"><a href=<?php echo base_url();?>><i class="fa fa-home"></i> Home</a></li>
						<li class="scroll active"><a href=<?php echo base_url('/login/');?>><i class="fa fa-sign-in"></i> login</a></li>
						</ul>
					</div><!--/.collapse(for mobile)-->
				</div><!--/.container-->
			</div><!--/#main-nav-->
		</header>

		<section id="login">
			<div id="login-bg" class="parallax">
				<div class="container" style="margin-top:80px;">
					<div class="text-center col-sm-4 col-sm-offset-4">
						<h2><strong>LOGIN</strong></h2>
					</div>
					<div>
						<div class="col-sm-4 col-sm-offset-4">
							<form name="form_login_himamo" method="post">
								<div class="row">
									<?php
										if (!empty($error_msg)) {
											echo '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$error_msg.'</div>';
										}
									?>
									<div class="form-group">
										<input type="text" name="username_himamo" class="form-control" placeholder="Username" required autofocus>
									</div>
									<div class="form-group">
										<input type="password" name="password_himamo" class="form-control" placeholder="Password" required>
									</div>                     
									<div class="form-group">
										<input type="submit" name="login_submit_himamo" class="btn-submit" value="Login">
									</div>
								</div>
							</form>   
						</div>
					</div>
				</div><!--/.container-->
			</div>   <!--/#login-bg-->     
		</section>

		<footer id="footer">
			<div class="footer-top">
				<div class="container text-center">
					<div class="footer-logo">
						<a href=<?php echo base_url();?>><img class="img-responsive" src=<?php echo base_url('/assets/images/logo.png');?> alt="logo himamo"></a>
					</div><!--/.footer-logo-->
					<div class="social-icons">
						<ul>
							<li><a class="envelope" href="mailto:webmaster@himamo.com"><i class="fa fa-envelope"></i></a></li>
							<li><a class="twitter" href="https://twitter.com/himamo_polman"><i class="fa fa-twitter"></i></a></li> 
							<li><a class="instagram" href="https://instagram.com/himamo_polman"><i class="fa fa-instagram"></i></a></li>
							<li><a class="youtube" href="https://www.youtube.com/channel/UC0ZEfY5moa9gWIIksG3aflw"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div><!--/.social-icons-->
				</div><!--/.container-->
			</div><!--/.footer-top-->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p> <a href="<?php echo base_url('/credits/');?>" target="_blank">Credits</a> | <a href="<?php echo base_url('assets/images/organigram.jpg');?>">Organigram</a> | <a href="<?php echo base_url('/proker/');?>">Rate Proker</a></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6">
							<p>&copy; 2017 HIMAMO</p>
						</div>
						<div class="col-sm-6">
							<p class="pull-right">Made with <i class="fa fa-heart"></i> by <a href="https://www.himamo.com/">Kominfo Division.</a></p>
						</div>
					</div>
				</div><!--/.container-->
			</div><!--/.footer-bottom-->
		</footer>

		<script type="text/javascript" src=<?php echo base_url('/assets/js/jquery.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/bootstrap.min.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/jquery.inview.min.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/wow.min.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/mousescroll.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/smoothscroll.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/jquery.countTo.js');?>></script>
		<script type="text/javascript" src=<?php echo base_url('/assets/js/lightbox.min.js');?>></script>
		<script type="text/javascript">
			$(document).ready(function(){
				new WOW().init();
				smoothScroll.init();
			});
		</script>
	</body>
</html>