<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HIMAMO | Dashboard</title>
    <link href=<?php echo base_url( '/assets/css/bootstrap.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/animate.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/font-awesome.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/lightbox.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/main.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/nav-reset.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/presets/preset8.css');?> rel="stylesheet" id="css-preset">
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
                        <li class="active"><a href="<?php echo base_url('/dashboard/');?>"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                        <li><a href="<?php echo base_url('/voting/');?>"><i class="fa fa-rocket"></i> e-Voting</a></li>
                        <li><a href="<?php echo base_url('/database/');?>"><i class="fa fa-database"></i> Database</a></li>
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
            <h3 style="font-weight:bold;">Hello,
                <?php echo $user->nama_mahasiswa;?>
            </h3>
        </div>
        <div class="col-sm-4">
            <ul class="list-group">
                <li class="list-group-item text-muted">User's Information</li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Nama</strong></span>
                    <?php echo $user->nama_mahasiswa;?>
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>NIM</strong></span>
                    <?php echo $user->nim;?>
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Kelas</strong></span>
                    <?php echo preg_replace('/^.{3}/', "$0 ", strtoupper($user->kode_kelas));?>
                </li>
                <li class="list-group-item text-right"><span class="pull-left"><strong>Wali Dosen</strong></span>
                    <?php echo $user->wali_dosen;?>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item text-muted">Settings</li>
                <li class="list-group-item">
                    <a id="change-name-button" style="cursor:pointer;"><i class="fa fa-plus-square-o"></i> Change Display Name</a>
                    <div id="change-name" style="margin-top:15px;">
                        <div class="form-group">
                            <label for="newname">New Name:</label>
                            <input type="text" name="newname" id="newname" class="form-control form-control-unset" style="height:50%;" required>
                        </div>
                        <input id="change-name-submit" type="button" class="btn btn-danger" value="Change">
                    </div>
                </li>
                <li class="list-group-item">
                    <a id="change-pwd-button" style="cursor:pointer;"><i class="fa fa-plus-square-o"></i> Change Password</a>
                    <form method="post" id="change-pwd" name="change-pwd" style="margin-top:15px;" action="<?php echo base_url('/dashboard/change_pwd/');?>">
                        <div class="errorTxt text-muted"></div>
                        <div class="form-group">
                            <label for="pwd">New Password:</label>
                            <input type="password" name="newpwd" id="newpwd" class="form-control form-control-unset" style="height:50%;">
                        </div>
                        <div class="form-group">
                            <label for="pwd2">Confirm New Password:</label>
                            <input type="password" name="newpwd2" id="newpwd2" class="form-control form-control-unset" style="height:50%;">
                        </div>
                        <input id="change-pwd-submit" type="button" class="btn btn-danger" value="Change">
                    </form>
                </li>
            </ul>
        </div>
        <div id="content-table-mine" class="col-sm-8">
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
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.validate.js');?>
        >

    </script>
    <script type="text/javascript">
        $.event.dispatch;
        jQuery.browser = {};
        (function() {
            jQuery.browser.msie = false;
            jQuery.browser.version = 0;
            if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
                jQuery.browser.msie = true;
                jQuery.browser.version = RegExp.$1;
            }
        })();

        function validatePassword() {
            var validator = $('form#change-pwd').validate({
                rules: {
                    newpwd: "required",
                    newpwd2: {
                        equalTo: "#newpwd"
                    }
                },
                messages: {
                    newpwd: " Enter Password",
                    newpwd2: " Enter Confirm Password Same as Password"
                },
                errorElement: 'div',
                errorLabelContainer: '.errorTxt'
            });
            if ($('form#change-pwd').valid()) {
                $('form#change-pwd').submit();
            }
        }
        $(document).ready(function() {
            $('form#change-pwd').hide();
            $('#change-pwd-button').click(function() {
                $('form#change-pwd').toggle();
                $('#newpwd').focus();
            });
            $('div#change-name').hide();
            $('#change-name-button').click(function() {
                $('div#change-name').toggle();
                $('#newname').focus();
            });
            $.ajax({
                url: '<?php echo base_url("/dashboard/get/");?>',
                data: {
                    'kode_kelas': '<?php echo $user->kode_kelas;?>',
                },
                async: false,
                cache: false,
                type: 'get',
                success: function(data) {
                    $('#content-table-mine').html(data);
                }
            });
            $('#change-name-submit').click(function() {
                alert('Eh, jangan ganti nama, nanti ada yang marah :((');
            });
            $('#change-pwd-submit').click(function() {
                validatePassword();
            });
            $('#newpwd2').keypress(function(e) {
                if (e.which == 13) {
                    validatePassword();
                };
            });
        });

    </script>
</body>

</html>
