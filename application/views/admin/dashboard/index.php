<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<?php include("header.php"); ?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?=include("top-bar.php"); ?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?=include("left-sidebar.php"); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
			<div class="col-xs-12">
			<div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="<?= base_url('admin/Dashboard') ?>">Home</a>
                                        </li>
                                        <!--<li>-->
                                            <!--<a href="#">Dashboard</a>-->
                                        <!--</li>-->
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                        </div>
			</div>
			</div>
                        <!-- end row -->

                        <div class="row">

                            <div class="col-lg-4 col-md-4">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-chart-line widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase text-white font-600 font-secondary text-overflow" title="Total Speakers">Total Speakers</p>
                                        <h2 class="text-white"><span data-plugin="counterup">65841</span> <small><i class="mdi mdi-arrow-up text-white"></i></small></h2>
                                        <p class="text-white m-0"><b>10%</b> From previous period</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-4 col-md-4">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-access-point-network widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-white text-uppercase font-600 font-secondary text-overflow" title="Total Delegates">Total Delegates</p>
                                        <h2 class="text-white"><span data-plugin="counterup">52142</span> <small><i class="mdi mdi-arrow-up text-white"></i></small></h2>
                                        <p class="text-white m-0"><b>5.6%</b> From previous period</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                             <div class="col-lg-4 col-md-4 ">
                                <div class="card-box widget-box-two widget-two-purple">
                                    <i class="mdi mdi-timetable widget-two-icon"></i>
                                    <div class="wigdet-two-content">
                                        <p class="m-0 text-uppercase text-white font-600 font-secondary text-overflow" title="Total AEC Members">Total AEC Members</p>
                                        <h2 class="text-white"><span data-plugin="counterup">2365</span> <small><i class="mdi mdi-arrow-up text-white"></i></small></h2>
                                        <p class="text-white m-0"><b>7.02%</b> From previous period</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            

                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include("footer-bar.php"); ?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <?=include("footer.php"); ?>


        