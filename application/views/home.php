<!DOCTYPE html>
<html lang="en">
	<head>
	    <script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Product",
  "name": "Official website HIMAMO",
  "image": "https://himamo.com/assets/images/about-bg.jpg",
  "description": "Himpunan Mahasiswa Teknik Otomasi Manufaktur dan Mekatronika",
  "brand": {
    "@type": "Website",
    "name": "Himamo"
  },
  "offers": {
    "@type": "Offer",
    "priceCurrency": "IDR",
    "price": "700000"
  }
}
</script>

		<meta charset="utf-8">
		<meta name="description" content="Himamo Himpunan Mahasiswa Otomasi Manufaktur dan Mekatronika">
		<meta name="keywords" content="himamo,polman,otomasi,mekatronika,himpunan mahasiswa,hmj,manufaktur,bandung,kanayakan">
		<meta name="author" content="HIMAMO 22">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>HIMAMO | Himpunan Mahasiswa Otomasi Manufaktur &amp; Mekatronika</title>
		<link href="<?php echo base_url('/assets/css/bootstrap.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('/assets/css/animate.min.css');?>" rel="stylesheet"> 
		<link href="<?php echo base_url('/assets/css/font-awesome.min.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('/assets/css/lightbox.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('/assets/css/main.css');?>" rel="stylesheet">
		<link id="css-preset" href="<?php echo base_url('/assets/css/presets/preset8.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('/assets/css/responsive.css');?>" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" type="image/png" href="<?php echo base_url('favicon.png');?>">
		<script src="https://use.fontawesome.com/6814ee98ee.js"></script>
	</head><!--/head-->
	<body>
		<!--.preloader-->
		<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
		<!--/.preloader-->
		<header id="home">
			<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="carousel-inner">
					<div class="item active" style="background-image: url(<?php echo base_url('/assets/images/slider/1.jpg');?>); background-position: center 0;">
						<div class="caption">
							<h1 class="animated fadeInLeftBig">Welcome to <span>HIMAMO</span></h1>
							<p class="animated fadeInRightBig">HIMPUNAN MAHASISWA OTOMASI MANUFAKTUR <span>&amp;</span> MEKATRONIKA.</p>
							<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">SCROLL DOWN!</a>
						</div>
					</div>
					<div class="item" style="background-image: url(<?php echo base_url('/assets/images/slider/3.jpg');?>)">
						<div class="caption">
							<h1 class="animated fadeInLeftBig"><u>STILL THE HIGHEST</u> <span><p><u>STILL THE BEST</u></p></span></h1>
							<p class="animated fadeInRightBig"></p>
							<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">SCROLL DOWN!</a>
						</div>
					</div>
				</div>
				<a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>
				<a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
			</div><!--/#home-slider-->
			<div class="main-nav">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo base_url();?>">
							<h1><img class="img-responsive" src="<?php echo base_url('/assets/images/logo.png');?>" alt="logo"></h1>
						</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">                 
							<li class="scroll active"><a href="#home"><i class="fa fa-home"></i> Home</a></li>
							<li class="scroll"><a href="#services"><i class="fa fa-user"></i> Tentang</a></li> 
							<li class="scroll"><a href="#about-us"><i class="fa fa-clock-o"></i> Sejarah</a></li>                     
							<li class="scroll"><a href="#portfolio"><i class="fa fa-sitemap"></i> Divisi</a></li>
							<li class="scroll"><a href="#team"><i class="fa fa-history"></i>  Kepemimpinan</a></li>
							<li class="scroll"><a href="#contact"><i class="fa fa-users"></i> HUBUNGI</a></li> 
							<li><a href= "blog.<?php echo base_url();?>" target="_blank"><i class="fa fa-rss-square"></i> Blog</a></li>
							<?php if (!$this->session->userdata('is_logged_in')) { ?>
							<li><a href="<?php echo base_url('/login/');?>"><i class="fa fa-sign-in"></i> Login</a></li>
							<?php }else{?>
							<li><a href="<?php echo base_url('/dashboard/');?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div><!--/#main-nav-->
		</header><!--/#home-->
		<section id="services" style="tp: 30px;">
			<div class="container">
				<div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="row">
						<div class="text-center col-sm-8 col-sm-offset-2">
							<h2>Apa itu Jurusan Teknik Otomasi Manufaktur dan Mekatronika?</h2>
							<p>
								Memiliki kompetensi inti pada perancangan dan pembuatan teknologi terpadu dalam mekatronik
								dan otomasi manufaktur. <strong>Mekatronika</strong> adalah perpaduan dari teknik listrik, informasi,
								mekanik dan sistem kendali yang merupakan kompetensi dalam pembuatan alat atau komponen digunakan untuk
								membangun sistem otomatis. Sementara <strong>Otomasi Manufaktur</strong> menangani keterbatasan
								manusia dengan sifat kerja yang berulang-ulang yang dihasilkan dari integrasi aplikasi dan beberapa
								perangkat elektronik. Menyediakan layanan dalam sistem kendali otomasi yang berkualitas dan handal
								bagi industri manufaktur, elektronika, agro, pertambangan, tekstil, pengolahan makanan dan minuman,
								dan peralatan elektronik rumah sakit.
							</p>
						</div>
					</div> 
					<div class="row">
						<div class="text-center col-sm-8 col-sm-offset-2">
							<h2>Apa itu <strong>Himpunan</strong> Otomasi Manufaktur dan Mekatronika?</h2>
							<p>
								Himpunan mahasiswa jurusan (disingkat HMJ) adalah organisasi mahasiswa di tingkat jurusan di suatu
								perguruan tinggi. Keberadaan himpunan mahasiswa jurusan haruslah berdasarkan prinsip dari, oleh dan
								untuk mahasiswa. Himpunan mahasiswa jurusan merupakan media bagi anggotanya untuk mengembangkan pola 
								pikir dan kepribadian yang berkaitan dengan disiplin ilmunya agar siap terjun ke masyarakat.
							</p>
						</div>
					</div> 
				</div>
				<div class="text-center our-services">
					<div class="row">
						<?php $delay=350; foreach($all_divisi as $divisi):?>
						<?php
							switch ($divisi->id) {
								case 1:$fontawesome = "fa-comments";break;
								case 2:$fontawesome = "fa-flash";break;
								case 3:$fontawesome = "fa-pencil";break;
								case 4:$fontawesome = "fa-heart";break;
								case 5:$fontawesome = "fa-slideshare";break;
								case 6:$fontawesome = "fa-line-chart";break;
								case 7:$fontawesome = "fa-shopping-cart";break;
							}
						?>
						<div class="col-sm-<?php echo ($divisi->id != 7)? 4: 12;?> wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $delay;?>ms">
							<div class="service-icon">
								<i class="fa <?php echo $fontawesome;?>"></i>
							</div>
							<div class="service-info">
								<h3>Divisi <?php echo $divisi->nama;?></h3>
								<p><?php echo $divisi->deskripsi;?></p>
							</div>
						</div>
						<?php $delay+=100; endforeach;?>
					</div>
				</div>
			</div>
		</section><!--/#services-->
		<section id="about-us" class="parallax">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
							<h7>SEJARAH HIMAMO</h7>
							<br/>
							<h8>
								HIMAMO didirikan di Bandung pada tanggal 14 November 1995.<br><br>
								HIMAMO merupakan himpunan pertama yang didirikan di kampus Politeknik Manufaktur Negeri Bandung.
								Sejak Awal didirikannya himpunan ini, sudah berazaskan dan berlandaskan Pancasila dan kebenaran ilmiah
								tentang himpunan. HIMAMO sendiri merupakan himpunan yang bersifat kekeluargaan, independen dan
								professional.
							</h8>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#about-us-->
		<section id="portfolio">
			<div class="container">
				<div class="row">
					<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h2>DIVISI HIMAMO</h2>
						<p>Ada 7 divisi yang terdapat di pengurusan HIMAMO. Untuk lebih lengkapnya silahkan scroll dan klik linknya.</p>
					</div>
				</div> 
			</div>
			<div class="container-fluid">
				<div class="row">
					<?php $delay = 300; foreach($all_divisi as $divisi):?>
					<div class="col-sm-3">
						<div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="<?php echo $delay;?>ms">
							<div class="folio-image">
								<img class="img-responsive" src="<?php echo base_url('/assets/images/portfolio/'.preg_replace("/\s+/", "", strtolower($divisi->nama)).'.jpg');?>" alt="">
							</div>
							<div class="overlay">
								<div class="overlay-content">
									<div class="overlay-text">
										<div class="folio-info">
											<h3>Divisi <?php echo $divisi->nama;?></h3>
										</div>
										<div class="folio-overview">
											<span class="folio-link"><a target="_blank" class="folio-read-more" href="<?php echo base_url('/divisi/'.preg_replace("/\s+/", "", strtolower($divisi->nama))).'/';?>"><i class="fa fa-link"></i></a></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php $delay+=100; endforeach;?>
				</div>
			</div>
		</section><!--/#portfolio-->
		<section id="team">
			<div class="container">
				<div class="row">
					<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
						<h2>SEJARAH KEPEMIMPINAN</h2>
						<p>Sejarah Kepemimpinan Ketua Himpunan Mahasiswa Jurusan Teknik Otomasi Manufaktur dan Mekatronika.</p>
					</div>
				</div>
				<div class="team-members">
					<div class="row">
						<?php $delay = 300; foreach($all_pemimpin as $pemimpin):?>
						<?php $pemimpin_nama = $this->MMahasiswa->get_rows(array('kepemimpinan' => true, 'return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $pemimpin->nim)))->nama_mahasiswa; ?>
						<div class="col-sm-3">
							<div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="<?php echo $delay;?>ms">
								<div class="member-image">
									<img class="img-responsive" src="<?php echo base_url('/assets/images/team/'.preg_replace("/\s+/", "", strtolower($pemimpin_nama)).'.jpg');?>" alt="">
								</div>
								<div class="member-info">
									<?php $tahun_berhenti = $pemimpin->tahun_jadi+1;?>
									<h3><?php echo $pemimpin_nama;?></h3>
									<h4>Masa Jabatan: <?php echo ($pemimpin->tahun_jadi == date("Y"))? "Sekarang": "$pemimpin->tahun_jadi s/d $tahun_berhenti";?></h4>
									<h4>NIM: <?php echo $pemimpin->nim;?></h4>
									<h4>HIMAMO <?php echo $pemimpin->tahun_jadi - 1996;?></h4>
								</div>
								<?php if ($pemimpin->email || $pemimpin->linkedin) { ?>
								<div class="social-icons" style="margin-top:5px; margin-bottom:20px;">
									<ul>
										<?php if ($pemimpin->email) { ?>
										<li><a class="email" href="mailto:<?php echo $pemimpin->email;?>"><i class="fa fa-envelope"></i></a></li>
										<?php } ?>
										<?php if ($pemimpin->linkedin) { ?>
										<li><a class="linkedin" href="https://linkedin.com/in/<?php echo $pemimpin->linkedin;?>"><i class="fa fa-linkedin"></i></a></li>
										<?php } ?>
									</ul>
								</div>
								<?php } ?>
							</div>
						</div>
						<?php $delay+=100; endforeach;?>
					</div>
				</div>            
			</div>
		</section><!--/#team-->
		<section id="features" class="parallax">
			<div class="container">
				<div class="row count">
					<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
						<i class="fa fa-users"></i>
						<h3 class="timer">227</h3>
						<p>Anggota</p>
					</div>
					<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
						<i class="fa fa-university"></i>
						<h3 class="timer">21</h3>                    
						<p>Angkatan</p>
					</div> 
					<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
						<i class="fa fa-trophy"></i>
						<h3 class="timer">2</h3>                    
						<p>Kejuaraan Nasional</p>
					</div> 
					<div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
						<i class="fa fa-flag"></i>                    
						<h3>1</h3>
						<p>Bendera</p>
					</div>
				</div>
			</div>
		</section><!--/#features-->
		<section id="twitter" class="parallax">
			<div>
				<a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
				<a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
				<div class="container">
					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="quote">
								<div><i class="fa fa-quote-right" style="font-size:35px;"></i></div>
								<h7>Kata Mereka</h7>
							</div>
							<div id="twitter-carousel" class="carousel slide" data-ride="carousel" style="font-size:20px; font-weight:bold; text-shadow: 2px 2px 4px #000000; margin-top:20px;">
								<div class="carousel-inner">
									<?php foreach($all_quotes as $quotes):?>
									<div class="item <?php echo ($quotes->id == 1)? 'active wow fadeIn': '';?>" <?php echo ($quotes->id == 1)? 'data-wow-duration="1000ms" data-wow-delay="300ms"': '';?>>
										<p>"<?php echo $quotes->text;?>"</p>
										<p>- <?php echo $this->MMahasiswa->get_rows(array('return_type' => 'one_row', 'where' => array('mahasiswa.nim' => $quotes->nim)))->nama_mahasiswa;?> -</p>
									</div>
									<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#twitter-->
		<!--/#video-->
		<div class="container-fluid">
			<video controls class="full-width">
				<source src="<?php echo base_url('/vids/vidweb.webm');?>" type="video/mp4">
			</video>
		</div>
		<!--/#video-->
		<!--/#blog-->
		<section id="contact">
			<div id="contact-us" class="parallax">
				<div class="container">
					<div class="row">
						<div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="margin-bottom:50px;">
							<h7>HUBUNGI KAMI</h7>
						</div>
					</div>
					<div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div class="row">
							<div class="col-sm-6">
								<form id="main-contact-form" name="contact-form" method="post" action="<?php echo base_url('/sendmail.php');?>">
									<div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Nama" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<input type="email" name="email" class="form-control" placeholder="Alamat Email" required>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<input type="text" name="subject" class="form-control" placeholder="Subject" required>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<textarea name="message" id="message" class="form-control" rows="4" placeholder="Ketik pesan anda disini" required></textarea>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<button type="submit" class="btn-submit"><strong>Kirim!</strong></button>
											</div>
										</div>
									</div>
								</form>   
							</div>
							<div class="col-sm-6">
								<div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
									<h7>Lokasi Kami</h7>
									<ul class="address" style="margin-top:20px; font-weight:bold; font-size: 18px;">
										<li><i class="fa fa-map-marker"></i> <span> Sekretariat: Jl. Kanayakan No 21, Dago, Bandung</span></li>
										<li><i class="fa fa-envelope"></i> <span> Email:<a href="mailto:officialhimamo@gmail.com"> webmaster@himamo.com</a></span></li>
										<li><i class="fa fa-globe"></i> <span> Website: <a href="https://himamo.com" target="_blank">himamo.com</a></span></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>        
		</section><!--/#contact-->
		<footer id="footer">
			<div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="container text-center">
					<div class="footer-logo">
						<a href="<?php echo base_url();?>"><img class="img-responsive" src="<?php echo base_url('/assets/images/logo.png');?>" alt=""></a>
					</div>
					<div class="social-icons">
						<ul>
							<li><a class="envelope" href="mailto:webmaster@himamo.com"><i class="fa fa-envelope"></i></a></li>
							<li><a class="twitter" href="https://twitter.com/himamo_polman"target="_blank"><i class="fa fa-twitter"></i></a></li> 
							<li><a class="instagram" href="https://instagram.com/himamo_polman" target="_blank"><i class="fa fa-instagram"></i></a></li>
							<li><a class="youtube" href="https://www.youtube.com/channel/UC0ZEfY5moa9gWIIksG3aflw"target="_blank"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
					<div>
						<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=KUDVGEXJNLQ2G" target="_blank">
							<img src="<?php echo base_url('/assets/images/gif/donat.png');?>" style="width:15%;">
						</a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="col-sm-6">
						<p> <a href="<?php echo base_url('/credits/');?>" target="_blank">Credits</a> | <a href="<?php echo base_url('assets/images/organigram.jpg');?>">Organigram</a> | <a href="<?php echo base_url('/proker/');?>">Rate Proker</a> | <a href="<?php echo base_url('/mogazine/');?>">Mogazine <span style="background-color:red" class="badge">new</span></a></p>
					</div>
				</div>
				<div class="container">
					<div class="col-sm-6">
						<p>&copy; 2017 - <?php echo date('Y');?> HIMAMO.</p>
					</div>
					<div class="col-sm-6">
						<p class="pull-right">Made with <i class="fa fa-heart"></i> by Kominfo Division.</a></p>
					</div>
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
		<script type="text/javascript" src="<?php echo base_url('/assets/js/main.js');?>"></script>
	</body>
</html>