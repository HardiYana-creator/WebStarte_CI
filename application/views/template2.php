<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website
    Copier/3.x [XR&CO'2014], Fri, 08 May 2020 04:27:36 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PT. Rajawali Technologi Indonesia</title>
        <!-- Favicon and touch icons -->
        <link
            rel="shortcut icon"
            href="<?= base_url() ?>assets/dist/img/ico/favicon.png"
            type="image/x-icon">
        <!-- Start Global Mandatory Style
        =====================================================================-->
        <!-- jquery-ui css -->
        <link
            href="<?= base_url() ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Bootstrap -->
        <link
            href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet"
        type="text/css"/>-->
        <!-- Lobipanel css -->
        <link
            href="<?= base_url() ?>assets/plugins/lobipanel/lobipanel.min.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Pace css -->
        <link
            href="<?= base_url() ?>assets/plugins/pace/flash.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Font Awesome -->
        <link
            href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Pe-icon -->
        <link
            href="<?= base_url() ?>assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Themify icons -->
        <link
            href="<?= base_url() ?>assets/themify-icons/themify-icons.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Emojionearea -->
        <link
            href="<?= base_url() ?>assets/plugins/emojionearea/emojionearea.min.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Monthly css -->
        <link
            href="<?= base_url() ?>assets/plugins/monthly/monthly.css"
            rel="stylesheet"
            type="text/css"/>
        <link
            href="<?php echo base_url('assets/datatables/css/jquery.dataTables.min.css')?>"
            rel="stylesheet">
        <!-- Theme style -->
        <link
            href="<?= base_url() ?>assets/dist/css/stylecrm.css"
            rel="stylesheet"
            type="text/css"/>
        <!-- Theme style rtl -->
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            google
                .charts
                .load('current', {'packages': ['corechart']});
            google
                .charts
                .setOnLoadCallback(drawVisualization);

            function drawVisualization() {
                // Some raw data (not necessarily accurate)
                var data = google
                    .visualization
                    .arrayToDataTable(
						<?= json_encode($array_pembayaran_agent) ?>
						// [
						// 	[
						// 		'Month', 'Sofyan', 'DINADA'
						// 	],
						// 	[
						// 		'2020/06', 123000000, 89000000
						// 	],
						// 	[
						// 		'2020/07', 90000000, 67000000
						// 	],
						// 	[
						// 		'2020/08', 70000000, 89000000
						// 	],
						// 	[
						// 		'2020/09', 65000000, 86000000
						// 	]
						// ]
					);

                var options = {
                    title: 'Dayly payment / Agent',
                    vAxis: {
                        title: 'Payment'
                    },
                    hAxis: {
                        title: 'Date'
                    },
                    seriesType: 'bars'
                };

                var chart = new google
                    .visualization
                    .ComboChart(document.getElementById('chart_div2'));
                chart.draw(data, options);
            }
        </script>
        <?= assets_head(); ?>
    </head>

    <body class="hold-transition sidebar-mini">
  
        <!--preloader-->
        <div id="preloader">
            <div id="status"></div>
        </div>
        <!-- Site wrapper -->
        <div class="wrapper">
            <header class="main-header">
                <a href="<?= base_url();?>" class="logo">
                    <!-- Logo -->
                    <span class="logo-mini">
                        <img src="assets/dist/img/mini-logo.png" alt="">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/dist/img/logo.png" alt="">
                    </span>
                </a>
                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <!-- Sidebar toggle button-->
                        <span class="sr-only">Toggle navigation</span>
                        <span class="pe-7s-angle-left-circle"></span>
                    </a>
                    <!-- searchbar-->
                    <a href="#search">
                        <span class="pe-7s-search"></span></a>
                    <div id="search">
                        <button type="button" class="close">×</button>
                        <form>
                            <input type="search" value="" placeholder="Search.."/>
                            <button type="submit" class="btn btn-add">Search...</button>
                        </form>
                    </div>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Notifications -->
                            <li class="dropdown dropdown-user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    Administrator :
                                    <?= $this->session->userdata('first_name');?>
                                    <img
                                        src="<?= base_url()?>assets/dist/img/avatar5.png"
                                        class="img-circle"
                                        width="45"
                                        height="45"
                                        alt="user"></a>
                                <ul class="dropdown-menu">
                                    <!-- <li> <a href="profile.html"> <i class="fa fa-user"></i> User Profile</a>
                                    </li> <li><a href="#"><i class="fa fa-inbox"></i> Inbox</a></li> -->
                                    <li>
                                        <a href="<?= base_url()?>Auth/logout">
                                            <i class="fa fa-sign-out"></i>
                                            Signout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </nav>
            </header>
            <!-- =============================================== -->
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <div class="sidebar">
                    <!-- sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="<?=base_url()?>Dashboard">
                                <i class="fa fa-tachometer"></i>
                                <span>Dashboard</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    <?php
                    $menu = $this->db->get_where('menu', array('is_parent' => 0,'is_active'=>1));
                    foreach ($menu->result() as $m) {
                        // chek ada sub menu
                        $submenu = $this->db->get_where('menu',array('is_parent'=>$m->id,'is_active'=>1));
                        if($submenu->num_rows()>0){
                            // tampilkan submenu
                            echo "<li class='treeview'>
                            ".anchor('#',  "<i class='$m->icon'></i>".strtoupper($m->name).' <i class="fa fa-angle-left pull-right"></i>')."
                            <ul class='treeview-menu'>";
                            foreach ($submenu->result() as $s){
                                echo "<li>" . anchor($s->link, "<i class='$s->icon'></i> <span>" . strtoupper($s->name)) . "</span></li>";
                            }
                            echo"</ul>
                            </li>";
                        }else{
                            echo "<li>" . anchor($m->link, "<i class='$m->icon'></i> <span>" . strtoupper($m->name)) . "</span></li>";
                        }

                    }
                    ?>

                    </ul>
                </div>
                <!-- /.sidebar -->
            </aside>
            <!-- =============================================== -->
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="header-icon">
                        <img
                            src="<?= base_url()?>assets/images/rti.jpeg"
                            alt=""
                            class="img-responsive"
                            style="height:56px;">
                    </div>
                    <div class="header-title">
                        <h1>ADMINISTRATOR</h1>
                        <small>PT. Rajawali Technologi Indonesia</small>
                    </div>
                </section>
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                    <?php
                        echo $contents;
                    ?>
                    </div>
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Copyright &copy; 2020
                    <a href="https://www.rajawalitechnology.co.id/" target="_blank">PT. Rajawali Technologi Indonesia</a>.</strong>
                All rights reserved.
            </footer>
        </div>
        <?= get_modals() ?>
        <!-- /.wrapper -->
        <script
            src="<?= base_url() ?>assets/plugins/jQuery/jquery-1.12.4.min.js"
            type="text/javascript"></script>
        <!-- jquery-ui -->
        <script
            src="<?= base_url() ?>assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"
            type="text/javascript"></script>
        <!-- Bootstrap -->
        <script
            src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"
            type="text/javascript"></script>
        <!-- lobipanel -->
        <script
            src="<?= base_url() ?>assets/plugins/lobipanel/lobipanel.min.js"
            type="text/javascript"></script>
        <!-- Pace js -->
        <script
            src="<?= base_url() ?>assets/plugins/pace/pace.min.js"
            type="text/javascript"></script>
        <!-- SlimScroll -->
        <script
            src="<?= base_url() ?>assets/plugins/slimScroll/jquery.slimscroll.min.js"
            type="text/javascript"></script>
        <!-- FastClick -->
        <script
            src="<?= base_url() ?>assets/plugins/fastclick/fastclick.min.js"
            type="text/javascript"></script>
        <!-- CRMadmin frame -->
        <script src="<?= base_url() ?>assets/dist/js/custom.js" type="text/javascript"></script>

        <!-- ChartJs JavaScript -->
        <script
            src="<?= base_url() ?>assets/plugins/chartJs/Chart.min.js"
            type="text/javascript"></script>
        <!-- Counter js -->
        <script
            src="<?= base_url() ?>assets/plugins/counterup/waypoints.js"
            type="text/javascript"></script>
        <script
            src="<?= base_url() ?>assets/plugins/counterup/jquery.counterup.min.js"
            type="text/javascript"></script>
        <!-- Monthly js -->
        <script
            src="<?= base_url() ?>assets/plugins/monthly/monthly.js"
            type="text/javascript"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <!-- Dashboard js -->
        <script
            src="<?= base_url() ?>assets/dist/js/dashboard.js"
            type="text/javascript"></script>
        <script
            src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>

         

    </body>
    <?= assets_footer(); ?>
    <!-- Mirrored from thememinister.com/crm/index.html by HTTrack Website
    Copier/3.x [XR&CO'2014], Fri, 08 May 2020 04:37:19 GMT -->
</html>
