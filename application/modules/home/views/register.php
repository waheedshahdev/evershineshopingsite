
    <div class="main">
      <div class="container">
        
        <!-- BEGIN SIDEBAR & CONTENT -->
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

          <div class="col-md-12 col-sm-12">
    
                
           
                  <div class="panel-body row">
                    

                    <div class="col-md-6 col-sm-6 col-md-offset-3">
                      <h3>Register Your Self</h3>
                      <form role="form" action="<?php echo base_url('home/customer_auth');?>" method="post">
                      	<div class="col-md-6">
                      		<div class="form-group">
                          <label for="name">First Name</label>
                          <input type="text" id="email-login" class="form-control" placeholder="Your First Name" name="first_name" required>
                        </div>
                      	</div>
                      	<div class="col-md-6">
                      		<div class="form-group">
                          <label for="name">Last Name</label>
                          <input type="text" id="email-login" class="form-control" placeholder="Your Last Name" name="last_name" required>
                        </div>
                      	</div>
                        
                        <div class="form-group">
                          <label for="email-login">E-Mail</label>
                          <input type="text" id="email-login" class="form-control" placeholder="Your Email Address" name="email" required>
                        </div>
                        <div class="form-group">
                          <label for="email-login">Phone Number</label>
                          <input type="text" id="phone-number" class="form-control" placeholder="Your Phone number" name="phone" required>
                        </div>
                        <div class="form-group">
                          <label for="password-login">Password</label>
                          <input type="password" id="password-login" class="form-control" placeholder="Enter Password" name="password" required>
                        </div>
                        <div class="form-group">
                          <label for="password-login">Confirm Password</label>
                          <input type="password" id="password-login" class="form-control" placeholder="Enter Confirm Password" name="confirm_password" required>
                        </div>
                        <div class="padding-top-20">                  
                        	<div class="form-group">
                          <input type="submit" name="login" value="Register" class="btn btn-primary btn-block" id="customer_login">
                        </div>
                        </div>
                  
                        
                      </form>
                    </div>


                  </div>
                    <button class="btn btn-info" >Continue Shopping</button>
            <br>
            <br>
            
      
          </div>
          <!-- END CONTENT -->
      
      </div>
    </div>






















































