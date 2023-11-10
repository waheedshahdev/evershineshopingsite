
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Login</li>
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
            <h1>Checkout</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">

              <!-- BEGIN CHECKOUT -->


              <div id="checkout" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    
                  </h2>
                </div>
           
                  <div class="panel-body row">
                   

                    <div class="col-md-6 col-sm-6 col-md-offset-3">
                      <h3>Login</h3>
                      <p>I am a returning customer.</p>
                      <form role="form" action="<?php echo base_url('home/customer_auth/'.$this->uri->segment(3).'');?>" method="post">
                        <div class="form-group">
                          <label for="email-login">E-Mail</label>
                          <input type="text" id="email-login" class="form-control" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="password-login">Password</label>
                          <input type="password" id="password-login" class="form-control" name="password" required>
                        </div>
                        <a href="<?php echo base_url('home/forget_password'); ?>">Forgotten Password?</a>
                        <div class="padding-top-20">                  

                          <input type="submit" name="login" value="Login" class="btn btn-primary btn-block" id="customer_login">
                        </div>
                      </form>
                      <br>
                        <a href="<?php echo base_url('home/register'); ?>">New Customer? Create your account.</a>
                    </div>


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























