

            <div class="page-breadcrumb">

                <div class="row align-items-center">

                    <div class="col-5">

                        <h4 class="page-title">Profile Page</h4>

                        <div class="d-flex align-items-center">

                            <nav aria-label="breadcrumb">

                                <ol class="breadcrumb">

                                    <li class="breadcrumb-item"><a href="#">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Library</li>

                                </ol>

                            </nav>

                        </div>

                    </div>

                    <div class="col-7">

                        <div class="text-right upgrade-btn">

                            

                        </div>

                    </div>

                </div>

            </div>



            <div class="container-fluid">

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

             

                <div class="row">

                    <!-- Column -->

                    <div class="col-lg-4 col-xlg-3 col-md-5">

                        <div class="card">

                            <div class="card-body">

                                <center class="m-t-30"> <img src="<?php echo base_url(); ?>new_adminfiles/assets/image/users/5.jpg"

                                        class="rounded-circle" width="150" />

                                    <h4 class="card-title m-t-10"><?php echo $get_data[0]->username; ?></h4>

                                    <h6 class="card-subtitle">Administrator</h6>

                                    <div class="row text-center justify-content-md-center">

                                      

                                    </div>

                                </center>

                            </div>

                            <div>

                                <hr>

                            </div>

                            <div class="card-body"> <small class="text-muted">Email address </small>

                                <h6><?php echo $get_data[0]->email; ?></h6> <small class="text-muted p-t-30 db">User Type</small>

                                <h6><?php echo $get_data[0]->user_type; ?></h6> 

                                

                            </div>

                        </div>

                    </div>

                    <!-- Column -->

                    <!-- Column -->

                    <div class="col-lg-8 col-xlg-9 col-md-7">

                        <div class="card">

                            <div class="card-body">

                                <form class="form-horizontal form-material" action="<?php echo base_url('member/profile'); ?>" method="post">

                                    <div class="form-group">

                                        <label class="col-md-12">Full Name</label>

                                        <div class="col-md-12">

                                            <input type="text" placeholder="Ex: Member"

                                                class="form-control form-control-line" value="<?php echo $get_data[0]->username; ?>" name="username">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label for="example-email" class="col-md-12">Email</label>

                                        <div class="col-md-12">

                                            <input type="email" placeholder="abc@member.com"

                                                class="form-control form-control-line" name="email"

                                                id="example-email" value="<?php echo $get_data[0]->email

                                                ; ?>">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-md-12">New Password</label>

                                        <div class="col-md-12">

                                            <input type="password"

                                                class="form-control form-control-line" name="password" placeholder="Enter New Password">

                                        </div>

                                    </div>

                                    <div class="form-group">

                                        <label class="col-md-12">Confirm Password</label>

                                        <div class="col-md-12">

                                            <input type="password"

                                                class="form-control form-control-line" name="confirm_password" placeholder="Confirm Password">

                                        </div>

                                    </div>

                                    

                                    

                                   

                                    <div class="form-group">

                                        <div class="col-sm-12">

                                            <button type="text" name="update_member" value="Update Profile" class="btn btn-success">Update Profile</button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                        <!-- Shipping Address -->

                    

                        <!-- Shipping Address -->

                    </div>

                    <!-- Column -->





                </div>

            </div>

