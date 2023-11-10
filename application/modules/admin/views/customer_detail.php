
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
                                    <h4 class="card-title m-t-10"><?php echo $get_data[0]->first_name.' '.$get_data[0]->last_name; ?></h4>
                                    <h6 class="card-subtitle">Customer</h6>
                                    
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?php echo $get_data[0]->email; ?></h6> <small class="text-muted p-t-30 db">Customer Code</small>
                                <h6><?php echo $get_data[0]->phone; ?></h6> <small class="text-muted p-t-30 db">Phone</small>
                                <h6><?php echo $get_data[0]->customer_id; ?></h6> <small class="text-muted p-t-30 db">Address</small>
                                <h6><?php echo $get_data[0]->street_address.' '.$get_data[0]->state.' '.$get_data[0]->city.', '.$get_data[0]->country; ?>	</h6>
                                <div class="map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508"
                                        width="100%" height="150" frameborder="0" style="border:0"
                                        allowfullscreen></iframe>
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="<?php echo base_url('admin/customer_detail/'.$this->uri->segment(3).''); ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12">First Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Ex: Member"
                                                class="form-control form-control-line" value="<?php echo $get_data[0]->first_name; ?>" name="first_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Last Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Ex: Member"
                                                class="form-control form-control-line" value="<?php echo $get_data[0]->last_name; ?>" name="last_name">
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
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password"
                                                class="form-control form-control-line" name="password" placeholder="Enter New Password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Confirm Password</label>
                                        <div class="col-md-12">
                                            <input type="password"
                                                class="form-control form-control-line" name="confirm_password" placeholder="Confirm Password" required="">
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
                        <div class="card">
                        	<h3>Shipping Address</h3>
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="<?php echo base_url('admin/customer_detail/'.$this->uri->segment(3).''); ?>" method="post">
                                    <div class="form-group">
                                        <label class="col-md-12">Phone Number</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Entry Your Phone Number"
                                                class="form-control form-control-line" value="<?php echo $get_data[0]->phone; ?>" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Country</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Entry Your Country"
                                                class="form-control form-control-line" value="<?php echo $get_data[0]->country; ?>" name="country">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">City</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Enter Your City Name"
                                                class="form-control form-control-line" name="city"
                                                id="example-email" value="<?php echo $get_data[0]->city
                                                ; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">State</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Enter Your State Name"
                                                class="form-control form-control-line" name="state"
                                                id="example-email" value="<?php echo $get_data[0]->state
                                                ; ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Street Address</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Enter Your Street Address"
                                                class="form-control form-control-line" name="street_address"
                                                id="example-email" value="<?php echo $get_data[0]->street_address
                                                ; ?>">
                                        </div>
                                    </div>
                                
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Postal Code</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Enter Your Postal Code"
                                                class="form-control form-control-line" name="postal_code"
                                                id="example-email" value="<?php echo $get_data[0]->postal_code
                                                ; ?>" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Shipping Option</label>
                                        <div class="col-md-12">
                                           
                                                <select class="form-control form-control-line" name="shipping_option">
                                                	<option value="TCS">TCS</option>
                                                	<option value="FedEx">FedEx</option>
                                                </select>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                   
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="text" name="update_member" value="Update Shipping" class="btn btn-success">Update Shipping</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Shipping Address -->
                    </div>
                    <!-- Column -->
                    <div class="col-md-12">
                    	       <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Customer Orders</h4>
                                    </div>
                                   
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Tracking</th>
									<th>Sub Total</th>
									<th>Promo Discount</th>
									<th>Grand Total</th>
									<th>payment</th>
									<th>Order Status</th>
									<th>Created</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($orders as $value):?>
								<tr>
									<td><?php echo $value->tracking_id;?></td>
									<td><?php echo $value->sub_total;?></td>
									<td><?php echo $value->promo_discount;?></td>
									<td><?php echo $value->order_grand_total;?></td>
									<td><?php echo $value->order_payment_method;?></td>
									<td><?php echo $value->order_status;?></td>
									<td><?php echo $value->created_at;?></td>
									<td><a href="<?php echo base_url('admin/order_detail/'.$value->id.'');?>" name="delete_shop_category" class="btn btn-info btn-xs">Detail</a></td>
								</tr>
							<?php endforeach; ?>

							</tbody>
						</table>
                            </div>
                        </div>
                    </div>
                </div>

        
            </div>
            </div>
                    </div>




                </div>
            </div>
