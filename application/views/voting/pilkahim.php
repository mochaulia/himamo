<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>e-Voting Himamo</title>
    <link href="<?php echo base_url('/assets/voting/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/voting/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>

<body>
    <div>

        <!-- Image and text -->
        <nav class="navbar navbar-light bg-faded cst-navbar" style="background-color:#009688;">
            <a class="navbar-brand" style="color:#fff;" href="<?php echo base_url();?>">
                <img src="<?php echo base_url('assets/images/logo.png');?>"> Voting System.
            </a>
        </nav>
        <div class="container-fluid" style="margin:auto">
            <div class="row">
                <?php foreach($all_calon as $calon):?>
                <div class="col-xs-6 col-md-3 col-centered" style="padding-bottom:10px;">

                    <a class="cst-card card text-center <?php echo ($calon->id == 1);?>" method="post">
                        <div class="card-block" style="margin-bottom:10px; ">
                            <img class="card-img-top" src="http://192.168.43.21/himamo/assets/voting/images/<?php echo $calon->picture;?>" class="img-fluid rounded-circle" alt="Responsive image">
                            <p class="card-title" style="text-center; border-bottom:1px solid #b2b2b2; padding-bottom:10px; padding-top:10px;"><b><?php echo $calon->nama;?></b></p>
                            <div id="outer">
                                <form method="post" action="<?php echo base_url('voting/send'); ?>">
                                    <input type="hidden" name="nim_voter" value="<?php echo $this->session->userdata('nim'); ?>">
                                    <input type="hidden" name="id_calon" value="<?php echo $calon->id;?>">
                                    <button type="submit" class="button_slide slide_right" value="add_voters">vote <i class="fa fa-angle-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </a>

                </div>
                <?php endforeach;?>
            </div>
        </div>

    </div>
</body>
<footer class="cst-footer">
    <div class="container-fluid bg-default py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="uppercase">Himamo e-voting system.</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<canvas id="myChart" width="100px" height="100px"></canvas>-->

</html>
<script src="<?php echo base_url('/assets/voting/js/Chart.bundle.min.js');?>"></script>
<script src="<?php echo base_url('/assets/voting/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('/assets/voting/js/jquery.min.js');?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

<div class="modal fade" id="myModal" data-modal="" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div style="border-radius:0;" class="modal-content">
            <div style="background-color:grey;border-radius:0;" class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <?php echo $calon->nama;?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
                <p class="uppercase">nim:
                    <?php echo $calon->nim;?>
                </p>
                <p class="uppercase">kelas:
                    <?php echo $calon->kelas;?>
                </p>
                <p class="uppercase">visi:
                    <?php echo $calon->nama;?>
                </p>
                <p class="uppercase">misi:
                    <?php echo $calon->misi;?>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="button_slide slide_right" data-dismiss="modal">Cancel <i class="fa fa-times"></i></button>
                <button type="button" class="button_slide slide_right"><b>VOTE</b> <i class="fa fa-rocket"></i></button>
            </div>
        </div>
    </div>
</div>
