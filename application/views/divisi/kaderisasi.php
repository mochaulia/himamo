<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>HIMAMO | Div. Kaderisasi</title>
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
			<div class="main-nav navbar-fixed-top" style="padding-right:20px;">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url();?>">
						<h1><img class="img-responsive" src="<?php echo base_url('assets/images/logo.png');?>" alt="logo"></h1>
					</a>                    
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">                 
						<li><a href="<?php echo base_url('/divisi/kominfo/');?>"><i class="fa fa-comments"></i> Kominfo</a></li> 
						<li class="active"><a href="<?php echo base_url('/divisi/kaderisasi/');?>"><i class="fa fa-flash"></i> Kaderisasi</a></li>                     
						<li><a href="<?php echo base_url('/divisi/kemasyarakatan/');?>"><i class="fa fa-slideshare"></i> Kemasyarakatan</a></li>
						<li><a href="<?php echo base_url('/divisi/kekeluargaan/');?>"><i class="fa fa-heart"></i>  Kekeluargaan</a></li>
						<li><a href="<?php echo base_url('/divisi/kajianstrategis/');?>"><i class="fa fa-line-chart"></i> Kajian Strategis</a></li>
						<li><a href="<?php echo base_url('/divisi/kreatifitas/');?>"><i class="fa fa-pencil"></i> Kreativitas</a></li> 
						<li><a href="<?php echo base_url('/divisi/rumahtangga/');?>"><i class="fa fa-shopping-cart"></i> RMH TANGGA</a></li> 
						<?php if (!$this->session->userdata('is_logged_in')) { ?>
						<li><a href="<?php echo base_url('/login/');?>"><i class="fa fa-sign-in"></i> Login</a></li>
						<?php }else{?>
						<li><a href="<?php echo base_url('/dashboard/');?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</header>

		<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="padding-bottom: 45px;">
			<div id="carousel1" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel1" data-slide-to="0" class="active"></li>
					<li data-target="#carousel1" data-slide-to="1"></li>
					<li data-target="#carousel1" data-slide-to="2"></li>
					<li data-target="#carousel1" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="item active"><img src="<?php echo base_url('assets/images/kegiatan/kartini/1.jpg');?>" alt="First slide image" class="center-block">
						<div class="carousel-caption">
							<h3>Upacara Peringatan Hari Kartini</h3>
							<p></p>
						</div>
					</div>
					<div class="item"><img src="<?php echo base_url('assets/images/kegiatan/kartini/2.jpg');?>" alt="Second slide image" class="center-block">
						<div class="carousel-caption">
							<h3></h3>
							<p></p>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
				<a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
			</div>
		</div>

		<div class="container" style="margin-bottom:90px;">
			<div class="text-center col-sm-6 col-sm-offset-3">
				<h2>Divisi Kaderisasi</h2>
				<p>Kaderisasi merupakan hal penting bagi sebuah organisasi, karena merupakan inti dari kelanjutan perjuangan organisasi ke depan. Tanpa kaderisasi, rasanya sangat sulit dibayangkan sebuah organisasi dapat bergerak dan melakukan tugas-tugas keorganisasiannya dengan baik dan dinamis. Kaderisasi adalah sebuah keniscayaan mutlak membangun struktur kerja yang mandiri dan berkelanjutan.</p>
				<p>Fungsi dari kaderisasi adalah mempersiapkan calon-calon yang siap melanjutkan tongkat estafet perjuangan sebuah organisasi. Kader suatu organisasi adalah orang yang telah dilatih dan dipersiapkan dengan berbagai keterampilan dan disiplin ilmu, sehingga dia memiliki kemampuan yang di atas rata-rata orang umum. Bung Hatta pernah menyatakan kaderisasi dalam kerangka kebangsaan, “Bahwa kaderisasi sama artinya dengan menanam bibit. Untuk menghasilkan pemimpin bangsa di masa depan, pemimpin pada masanya harus menanam.”</p>
			</div>
		</div>
		<footer id="footer">
			<div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="container text-center">
					<div class="footer-logo">
						<a href="<?php echo base_url();?>"><img class="img-responsive" src="<?php echo base_url('assets/images/logo.png');?>" alt=""></a>
					</div>
				<div class="social-icons">
					<ul>
						<li><a class="envelope" href="mailto:webmaster@himamo.com"><i class="fa fa-envelope"></i></a></li>
						<li><a class="twitter" href="https://twitter.com/himamo_polman"><i class="fa fa-twitter"></i></a></li> 
						<li><a class="instagram" href="https://instagram.com/himamo_polman"><i class="fa fa-instagram"></i></a></li>
						<li><a class="youtube" href="https://www.youtube.com/channel/UC0ZEfY5moa9gWIIksG3aflw"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="col-sm-6">
						<p> <a href="<?php echo base_url('/credits/');?>" target="_blank">Credits</a> | <a href="<?php echo base_url('assets/images/organigram.jpg');?>">Organigram</a> | <a href="<?php echo base_url('/proker/');?>">Rate Proker</a></p>
					</div>
				</div>
				<div class="container">
					<div class="col-sm-6">
						<p>&copy; 2017 HIMAMO</p>
					</div>
					<div class="col-sm-6">
						<p class="pull-right">Made with <i class="fa fa-heart"></i> by Kominfo Division.</p>
					</div>
				</div>
			</div>
		</footer>

	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.inview.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/wow.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/mousescroll.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/smoothscroll.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.countTo.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/lightbox.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('/assets/js/main.divisihima.js');?>"></script>

	</body>
</html>