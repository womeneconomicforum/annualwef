<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<?php if($header) echo $header ;?>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <?php if($topbar) echo $topbar ;?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <?php if($leftsidebar) echo $leftsidebar ;?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <?php if($main) echo $main ;?>
                </div> <!-- content -->

                <?php if($footerbar) echo $footerbar ;?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->
        <?php if($footer) echo $footer ;?>


        