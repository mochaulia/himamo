<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HIMAMO | Database</title>
    <link href=<?php echo base_url( '/assets/css/bootstrap.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/dataTables.bootstrap.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/animate.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/font-awesome.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/lightbox.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/main.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/nav-reset.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/presets/preset1.css');?> rel="stylesheet" id="css-preset">
    <link href=<?php echo base_url( '/assets/css/responsive.css');?> rel="stylesheet">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/png" href=<?php echo base_url( 'favicon.png');?>>
    <style type="text/css">
        .form-control-unset {
            border: 1px solid #ccc;
        }

    </style>
    <script src="https://use.fontawesome.com/6814ee98ee.js"></script>
</head>
<!--/head-->

<body>
    <header>
        <div class="main-nav navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                    <a class="navbar-brand" href=<?php echo base_url();?>>
							<h1><img class="img-responsive" src=<?php echo base_url('assets/images/logo.png');?> alt="logo himamo"></h1>
						</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('/dashboard/');?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                        <li><a href="<?php echo base_url('/voting/');?>"><i class="fa fa-rocket"></i> e-Voting</a></li>
                        <li class="active"><a href="<?php echo base_url('/database/');?>"><i class="fa fa-database"></i> Database</a></li>
                        <li><a href="<?php echo base_url('/proker/');?>"><i class="fa fa-code-fork"></i> Proker</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-users"></i> Divisi <span class="caret"></span>
								</a>
                            <ul class="dropdown-menu">
                                <?php foreach($all_divisi as $divisi):?>
                                <li><a target="_blank" href="<?php echo base_url('/divisi/'.preg_replace(" /\s+/ ", " ", strtolower($divisi->nama)).'/');?>"><?php echo $divisi->nama;?></a></li>
                                <?php endforeach;?>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url('/logout/');?>"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="container" style="margin-top:90px;margin-bottom:45px;">
        <div class="col-sm-12">
            <h2><strong>DATABASE ANGGOTA</strong></h2>
        </div>
        <div class="col-sm-3">
            <div class="list-group">
                <a id="kodekelassemua" class="list-group-item" style="cursor: pointer;">Show All</a>
                <?php foreach($all_kelas as $kelas):?>
                <a id="kodekelas<?php echo $kelas->kode;?>" class="list-group-item list-kelas" data-kode-kelas="<?php echo $kelas->kode;?>" style="cursor: pointer;"><?php echo preg_replace('/^.{3}/', "$0 ", strtoupper($kelas->kode));?></a>
                <?php endforeach;?>
            </div>
        </div>
        <div id="content-table" class="col-sm-9">
            <div style="height:330px;"><i class="fa fa-circle-o-notch fa-spin" style="font-size: 3em; position: absolute; top:50%; left: 50%; transform: translate(-50%, -50%);"></i></div>
        </div>
    </div>

    <footer id="footer">
        <div class="footer-top">
            <div class="container text-center">
                <div class="footer-logo">
                    <a href=<?php echo base_url();?>><img class="img-responsive" src=<?php echo base_url('/assets/images/logo.png');?> alt="logo himamo"></a>
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
                <div class="row">
                    <div class="col-sm-6">
                        <p> <a href="<?php echo base_url('/credits/');?>" target="_blank">Credits</a> | <a href="<?php echo base_url('assets/images/organigram.jpg');?>">Organigram</a> | <a href="<?php echo base_url('assets/docs/adart.pdf');?>">AD-ART</a> | <a href="<?php echo base_url('/proker/');?>">Rate Proker</a></p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>&copy; 2017 HIMAMO</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="pull-right">Made with <i class="fa fa-heart"></i> by <a href="https://www.himamo.com/">Kominfo Division.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/bootstrap.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.dataTables.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/dataTables.bootstrap.min.js');?>
        >

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                url: '<?php echo base_url("/database/get/");?>',
                data: {
                    'kode_kelas': '<?php echo $user->kode_kelas;?>',
                },
                async: false,
                cache: false,
                type: 'get',
                success: function(data) {
                    $('a#kodekelas<?php echo $user->kode_kelas;?>').addClass('active');
                    $('#content-table').html(data);
                }
            });
        });
        $('#kodekelassemua').on('click', function() {
            $.ajax({
                url: '<?php echo base_url("/database/get_all/");?>',
                async: false,
                cache: false,
                type: 'get',
                beforeSend: function() {
                    $('#content-table').html('<div style="height:330px;"><i class="fa fa-circle-o-notch fa-spin" style="font-size: 3em; position: absolute; top:50%; left: 50%; transform: translate(-50%, -50%);"></i></div>');
                },
                success: function(data) {
                    $('.list-group-item').removeClass('active');
                    $('#kodekelassemua').addClass('active');
                    $('#content-table').html(data);
                }
            });
        });
        $('.list-kelas').on('click', function() {
            var kode_kelas = $(this).data('kode-kelas');
            $.ajax({
                url: '<?php echo base_url("/database/get/");?>',
                data: {
                    'kode_kelas': kode_kelas,
                },
                async: false,
                cache: false,
                type: 'get',
                beforeSend: function() {
                    $('#content-table').html('<div style="height:330px;"><i class="fa fa-circle-o-notch fa-spin" style="font-size: 3em; position: absolute; top:50%; left: 50%; transform: translate(-50%, -50%);"></i></div>');
                },
                success: function(data) {
                    $('.list-group-item').removeClass('active');
                    $('a#kodekelas' + kode_kelas).addClass('active');
                    $('#content-table').html(data);
                }
            });
        });

    </script>
</body>

</html>
