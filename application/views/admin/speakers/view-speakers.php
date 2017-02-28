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
                <?=$title?>
                </li>
                </ol>
                <div class="clearfix"></div>
            </div>
	</div>
    </div>
    <!-- Message start-->
        <?php if(isset($error)){ ?>
        <div class="alert alert-danger">
            <?=$error['error'];?>.
        </div>
        <?php }?>
        <?php if(isset($success)){?>
         <div class="alert alert-success">
            <strong>Success!</strong> <?=$success;?>.
         </div>
        <?php } ?>
        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b><?= $title;?></b></h4>
                                    <hr/>

                                    <?php echo form_open_multipart('admin/speakers/addSpeakers');?>
                                        <div class="row">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label for="fname">First Name</label>
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" required="">
                                              </div>  
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label for="lname">Last Name</label>
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name">
                                              </div>  
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label for="designation">Designation</label>
                                                <input type="text" class="form-control" id="designation" name="designation" placeholder="Enter Designation">
                                              </div>  
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="form-group">
                                                <label for="country">Country</label>
                                                <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
                                              </div>  
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="description">Speaker Bio</label>
                                            <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Speaker Bio"></textarea>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label>Is Advisory</label>
                                            <div class="row">
                                                <div class="col-sm-1">
                                                    <input type="radio" name="is_advisory" value="true"/>True
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="radio" name="is_advisory" value="false"/>False
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        
                                              <div class="form-group">
                                                <label for="userimage">Upload Image</label>
                                                <input type="file" name="userfile" size="20" />
                                              </div>  
                                              <button type="submit" class="btn btn-purple waves-effect waves-light m-t-20">Submit</button>  
                                            
                                        </div>
                                      
                                    </form>
                                </div>
                            </div>

                            
                        </div>
                        <!-- end row -->
                        
</div>