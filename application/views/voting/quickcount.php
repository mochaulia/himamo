<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>e-Voting Himamo</title>
    <link href="<?php echo base_url('/assets/voting/css/style.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/voting/css/font-awesome.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Chart', 'Hours per Day'],
                ['Wiraga Khaliduddin', 47],
                ['Sulthan M Firdaus', 108],
                ['Imam Febiawan', 31],
                ['Aldo Apdila F', 16],
                ['Rianza Fauzi Z', 52]
            ]);

            var options = {
                title: 'Quick Count Pemilihan Ketua Himpunan',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }

    </script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Element", "Density", {
                    role: "style"
                }],
                ["Wiraga Khaliduddin", <?php echo $this->MQuickcount->persentase_calon(1);?>, "rgb(51, 102, 204);"],
                ["Sulthan M Firdaus", <?php echo $this->MQuickcount->persentase_calon(2);?>, "rgb(220, 57, 18);"],
                ["Imam Febiawan", <?php echo $this->MQuickcount->persentase_calon(3);?>, "rgb(255, 153, 0);"],
                ["Aldo Apdila F", <?php echo $this->MQuickcount->persentase_calon(4);?>, "rgb(16, 150, 24);"],
                ["Rianza Fauzi Z", <?php echo $this->MQuickcount->persentase_calon(5);?>, "rgb(153, 0, 153);"]
            ]);

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                {
                    calc: "stringify",
                    sourceColumn: 1,
                    type: "string",
                    role: "annotation"
                },
                2
            ]);

            var options = {
                title: "Perolehan Data",
                width: 600,
                height: 400,
                bar: {
                    groupWidth: "95%"
                },
                legend: {
                    position: "none"
                },
            };
            var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
            chart.draw(view, options);
        }

    </script>
</head>

<body>
    <div class="container-fluid cst-chart">

        <!-- Image and text -->
        <nav class="navbar navbar-light bg-faded cst-navbar" style="background-color:#009688;">
            <a class="navbar-brand" style="color:#fff;" href="<?php echo base_url();?>">
                <img src="<?php echo base_url('assets/images/logo.png');?>"> Quick Count.
            </a>
                <span class="nav-item active" style="link:white;vlink:white;alink:white;">
                    <a class="nav-link" href="https://himamo.com/"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </span>
        </nav>
        <div class="row">
            <div class="col-md-12">
                <div id="donutchart" style="width: 900px; height: 500px;"></div>
            </div>
            <div class="col-md-6">
                <div id="columnchart_values" style="width: 900px; height: 300px;"></div>
            </div>
            <div class="col-md-6 cst-table-qc" align="center" style=" padding-top:110px;">
                <table class="table table-bordered" style="text-align:center;">
                    <thead>
                        <tr>
                            <th>Nama Kandidat</th>
                            <th>Hasil Suara</th>
                            <th>Persentase</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Wiraga Khaliduddin</td>
                        <td>
                            <?php echo $this->MQuickcount->jumlah_vote(1);?>
                        </td>
                        <td>
                            <?php echo $this->MQuickcount->persentase_calon(1);?>%</td>
                    </tr>
                    <tr>
                        <td>Sulthan M Firdaus</td>
                        <td>
                            <?php echo $this->MQuickcount->jumlah_vote(2);?>
                        </td>
                        <td>
                            <?php echo $this->MQuickcount->persentase_calon(2);?>%</td>
                    </tr>
                    <tr>
                        <td>Imam Febiawan</td>
                        <td>
                            <?php echo $this->MQuickcount->jumlah_vote(3);?>
                        </td>
                        <td>
                            <?php echo $this->MQuickcount->persentase_calon(3);?>%</td>
                    </tr>
                    <tr>
                        <td>Aldo Apdilla F</td>
                        <td>
                            <?php echo $this->MQuickcount->jumlah_vote(4);?>
                        </td>
                        <td>
                            <?php echo $this->MQuickcount->persentase_calon(4);?>%</td>
                    </tr>
                    <tr>
                        <td>Rianza Fauzi Z</td>
                        <td>
                            <?php echo $this->MQuickcount->jumlah_vote(5);?>
                        </td>
                        <td>
                            <?php echo $this->MQuickcount->persentase_calon(5);?>%</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-12 centered">
        <h2>Jumlah suara:<strong> 254</strong></h2>
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
