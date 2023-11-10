
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Forget Password</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->

        <div class="row margin-bottom-40">

          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
          	            <?php 
    if($this->session->flashdata("error_msg") != ''){?>
       <div class="alert alert-danger">
           <button class="close" data-dismiss="alert"></button>
           <?php echo $this->session->flashdata("error_msg");?>
       </div>
       <?php
   }
   ?>
   <?php 
   if($this->session->flashdata("success") != ''){?>
       <div class="alert alert-success">
           <button class="close" data-dismiss="alert"></button>
           <?php echo $this->session->flashdata("success");?>
       </div>
       <?php
   }
   ?> 
            <h1>Forget Password</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              <!-- BEGIN CHECKOUT -->


              <div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    
                  </h2>
                </div>
           
                  <div class="panel-body row">
                   
                  	<?php if(empty($this->uri->segment(3))){?>

                  	
                    <div class="col-md-6 col-sm-6 col-md-offset-3">
                      <h3>Forget Password</h3>
                      <p>Please enter your email address to recover your password.</p>
                      <form role="form" action="<?php echo base_url('home/forget_password');?>" method="post">
                        <div class="form-group">
                          <label for="email-login">E-Mail</label>
                          <input type="email" id="email-login" class="form-control" name="email" required>
                        </div>

                        <div class="padding-top-20">                  

                          <input type="submit" name="forget" value="Submit" class="btn btn-primary btn-block">
                        </div>
                      </form>
                     
                    </div>
                <?php } elseif(!empty($this->uri->segment(3)) && !empty($this->uri->segment(4))){?>
                	<div class="col-md-6 col-sm-6 col-md-offset-3">
                      <h3>Change Your Password</h3>
                      <p>Please enter your new password.</p>
                      <form role="form" action="<?php echo base_url('home/forget_password');?>" method="post">
                        <div class="form-group">
                          <label for="email-login">New Password</label>
                          <input type="text" class="form-control" placeholder="New Password" name="new_password" required>
                        </div>
                        <div class="form-group">
                          <label for="email-login">Confirm Password</label>
                          <input type="text" class="form-control" placeholder="Confirm Password" name="confirm_new_password" required>
                        </div>
                        <input type="hidden" name="seg3" value="<?php echo $this->uri->segment(3); ?>">
                        <input type="hidden" name="seg4" value="<?php echo $this->uri->segment(4); ?>">

                        <div class="padding-top-20">                  

                          <input type="submit" name="change_password" value="Change Password" class="btn btn-primary btn-block">
                        </div>
                      </form>
                     
                    </div>
                <?php } ?>





                  </div>
            
              </div>
              <!-- END CHECKOUT -->

            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>























