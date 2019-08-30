<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HIMAMO | Program Kerja</title>
    <link href=<?php echo base_url( '/assets/css/bootstrap.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/animate.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/font-awesome.min.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/lightbox.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/main.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/nav-reset.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/presets/preset8.css');?> rel="stylesheet" id="css-preset">
    <link href=<?php echo base_url( '/assets/css/responsive.css');?> rel="stylesheet">
    <link href=<?php echo base_url( '/assets/css/star-rating.min.css')?> media="all" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" type="image/png" href=<?php echo base_url( 'favicon.png');?>>
    <style type="text/css">
        textarea.form-control {
            min-height: unset;
            color: unset;
            resize: none;
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
                        <li><a href="<?php echo base_url('/database/');?>"><i class="fa fa-database"></i> Database</a></li>
                        <li class="active"><a href="<?php echo base_url('/proker/');?>"><i class="fa fa-code-fork"></i> Proker</a></li>
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
        <div class="text-center col-sm-6 col-sm-offset-3">
            <h2><strong>PROGRAM KERJA</strong></h2>
            <h5>Click on our program to give a review</h5>
        </div>
        <div class="col-sm-6 col-sm-offset-3">
            <div class="panel-group wrap" id="bs-collapse">
                <?php foreach($all_divisi as $divisi):?>
                <div class="panel">
                    <div class="panel-heading">
                        <h4 class="panel-title">
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
                                <a data-toggle="collapse" data-parent="#" href="#prokerdiv<?php echo $divisi->id;?>"><i class="fa <?php echo $fontawesome;?>"></i> Divisi <?php echo $divisi->nama;?></a>
                        </h4>
                    </div>
                    <div id="prokerdiv<?php echo $divisi->id;?>" class="panel-collapse collapse">
                        <ul class="list-group">
                            <?php foreach($this->MProker->get_rows(array('id_divisi' => $divisi->id, 'return_type' => 'all')) as $proker): ?>
                            <li class="list-group-item">
                                <a data-toggle="modal" href="#prokerModal" id-proker="<?php echo $proker->id;?>">
                                    <?php echo $proker->nama;?> </a>
                                <i class="rating-sum fa fa-star"></i>
                                <strong> <span id="<?php echo "ratingproker".$proker->id;?>"><?php echo $this->MProker_raters->count_rating($proker->id);?></span>/5.0</strong>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
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

    <div id="prokerModal" class="modal fade" role="dialog" data-backdrop="static" tabindex='-1'>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><i class="fa fa-spinner fa-spin"></i> Loading....</h4>
                </div>
                <div class="modal-body">
                    <div class="text-center"> <i class="fa fa-circle-o-notch fa-spin" style="font-size: 2em;"></i></div>
                </div>
                <div class="modal-footer">
                    <div class="form-control-static text-center">
                        <input id="rate-proker" name="rate-proker" class="rating rating-loading" data-max="5" data-step="1" data-show-clear="false" data-show-caption="false" value="0" data-disabled="true">
                    </div>
                    <textarea class="form-control" name="text" placeholder="Write review here..." disabled></textarea>
                    <br>
                    <button type="button" class="btn btn-danger" disabled>Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/bootstrap.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.inview.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/wow.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/mousescroll.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/smoothscroll.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/jquery.countTo.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/lightbox.min.js');?>
        >

    </script>
    <script type="text/javascript" src=<?php echo base_url( '/assets/js/star-rating.min.js');?>
        >

    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            new WOW().init();
            smoothScroll.init();
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #bs-collapse')
                .on('show.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').addClass('active');
                })
                .on('hide.bs.collapse', function(a) {
                    $(a.target).prev('.panel-heading').removeClass('active');
                });
            $('#prokerModal').on('show.bs.modal', function(event) {
                var a = $(event.relatedTarget);
                var id_proker = $(a).attr('id-proker');
                $.ajax({
                    url: '<?php echo base_url("/proker/get/");?>',
                    data: {
                        'id_proker': id_proker
                    },
                    cache: false,
                    type: 'get',
                    success: function(dataproker) {
                        $('#prokerModal').find('.modal-content').html(dataproker);
                        $.ajax({
                            url: '<?php echo base_url("/proker/get_rate/");?>',
                            data: {
                                'id_proker': id_proker
                            },
                            cache: false,
                            type: 'get',
                            success: function(dataraters) {
                                $('#prokerModal').find('.modal-body-raters').html(dataraters);
                            }
                        });
                    }
                });
            });
        });

    </script>

</body>

</html>
