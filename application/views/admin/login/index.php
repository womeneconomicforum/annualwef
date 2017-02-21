<?php include_once("header.php"); ?>
<section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            <div class="m-t-40 account-pages">
                                <div class="text-center account-logo-box">
                                    <h2 class="text-uppercase">
                                        <a href="<?=  base_url('login'); ?>" class="text-success">
                                            Women Economic Forum
                                        </a>
                                    </h2>
                                    <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                                </div>
                                <div class="account-content">
                                    
                                    <form class="form-horizontal" action="<?= base_url('admin/login') ?>">

                                        <div class="form-group m-b-25">
                                            <div class="col-xs-12">
                                                <label for="emailaddress">User Name</label>
                                                <input class="form-control input-lg" type="text" id="username" required="" placeholder="Enter your UserName">
                                            </div>
                                        </div>

                                        <div class="form-group m-b-25">
                                            <div class="col-xs-12">
                                                <a href="<?= base_url('login/forgetPassword')?>" class="text-muted pull-right font-14">Forgot your password?</a>
                                                <label for="password">Password</label>
                                                <input class="form-control input-lg" type="password" required="" id="password" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                              <div class="form-group m-b-20">
                                                <div class="col-xs-12">
                                                    <div class="checkbox checkbox-custom">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                                            Remember me
                                                        </label>
                                                    </div>
                                                </div>
                                              </div>  
                                            </div>
                                            <div class="col-xs-6">
                                               <div class="form-group account-btn text-center m-t-10">
                                                    <div class="col-xs-12">
                                                        <button class="btn w-lg btn-rounded btn-lg btn-primary waves-effect waves-light" type="submit">Sign In</button>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    
                                    </form>

                                    <div class="clearfix"></div>

                                </div>
                            </div>
                            <!-- end card-box-->


                            

                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
<?php include_once("footer.php"); ?>