<div class="main">
      <div class="container">
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
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">My Account Page</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix" id="accountbtn"><a href="#accounts" data-toggle="tab"><i class="fa fa-angle-right"></i> My account</a></li>
              <li class="list-group-item clearfix" id="orderbtn"><a href="#order" data-toggle="tab"><i class="fa fa-angle-right"></i> Orders</a></li>
              <li class="list-group-item clearfix" id="profilebtn"><a href="#profile" data-toggle="tab"><i class="fa fa-angle-right"></i> Shipping Address</a></li>
              <li class="list-group-item clearfix" id="passwordbtn"><a href="#password" data-toggle="tab"><i class="fa fa-angle-right"></i> Change Your password</a></li>
              <li class="list-group-item clearfix"><a href="<?php echo base_url('home/cart'); ?>"><i class="fa fa-angle-right"></i> My Cart</a></li>
              <li class="list-group-item clearfix"><a href="<?php echo base_url('home/logout'); ?>"><i class="fa fa-angle-right"></i> Logout</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>My Account Page</h1>
            <div class="content-page">




              
              <div class="tab-content">
                    <div class="tab-pane fade in show active" id="accounts">
                        <h3>My Account</h3>
                            <div class="d-md-flex align-items-center">
                                
                                  <form action="<?php echo base_url('home/myaccount');?>" method="post">
                                    <h2>Customer Info</h2>
                                        <p>Customer Information!</p>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">First Name</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="First Name" value="<?php echo $customer_data[0]->first_name; ?>" name="first_name">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Last Name</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Last Name" value="<?php echo $customer_data[0]->last_name; ?>" name="last_name">
                                        </div>

                                        

                                        </div>
                                        <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">E-Mail</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="<?php echo $customer_data[0]->email; ?>" name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="control-label">Phone</label>
                                            <input type="text" class="form-control" id="input-Phone" placeholder="Phone" value="<?php echo $customer_data[0]->phone; ?>" name="phone">
                                        </div>

                                            
                                        </div>
                                            <input class="btn btn-primary" type="submit" name="update_info" value="Update" style="float: right;">
                                    </form>
                            </div>


                        </div>

                        <div class="tab-pane fade" id="order">
                            <div class="card">
                                <h3>Order List</h3>
                                <div class="table-responsive">
                                    <div id="order_table_wrapper" class="dataTables_wrapper no-footer">
                                       
                                        <div id="order_table_processing" class="dataTables_processing"
                                            style="display: none;">Processing...</div>
                                        <table id="order_table"
                                            class="table table-bordered table-striped dataTable no-footer" role="grid"
                                            aria-describedby="order_table_info" style="width: 100%;">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="Tracking" style="width: 86px;">Tracking</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order_table"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Sub Total: activate to sort column ascending"
                                                        style="width: 73px;">Sub Total</th>

                                                    <th class="sorting" tabindex="0" aria-controls="order_table"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Grand Total: activate to sort column ascending"
                                                        style="width: 89px;">Grand Total</th>
                                                    <th class="sorting_disabled" rowspan="1" colspan="1"
                                                        aria-label="payment" style="width: 103px;">payment</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order_table"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Order Status: activate to sort column ascending"
                                                        style="width: 97px;">Order Status</th>
                                                    <th class="sorting" tabindex="0" aria-controls="order_table"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Action: activate to sort column ascending"
                                                        style="width: 100px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($orders as $value) {?>
                                                    
                                                
                                                <tr role="row" class="odd">
                                                    <td><?php echo $value->tracking_id; ?></td>
                                                    <td><?php echo $value->sub_total; ?></td>
                                                    
                                                    <td><?php echo $value->order_grand_total; ?></td>
                                                    <td><?php echo $value->order_payment_method; ?></td>
                                                    <td><?php echo $value->order_status; ?></td>
                                                    
                                                    <td>
                                                        <a href="<?php echo base_url('home/orderdetail/'.$value->id.''); ?>"
                                                            name="delete_shop_category"
                                                            class="btn btn-info btn-xs">Detail</a></td>
                                                </tr>
                                                <?php } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="tab-pane fade" id="profile">

                            <div class="d-md-flex align-items-center">  
                                <div class="table-responsive">
                                    <div id="order_table_wrapper" class="dataTables_wrapper no-footer">
                                        <!-- <div class="dataTables_length" id="order_table_length"><label>Show <select                                                name="order_table_length" aria-controls="order_table" class="">                                                <option value="10">10</option>                                                <option value="25">25</option>                                                <option value="50">50</option>                                                <option value="100">100</option>                                            </select> entries</label></div>                                    <div id="order_table_filter" class="dataTables_filter" style="text-align:right;">                                        <label>Search:<input type="search" class="" placeholder=""                                                aria-controls="order_table"></label></div> -->
                                        <form action="<?php echo base_url('home/myaccount');?>" method="post">
                                    <h2>Shipping Details</h2>
                                        <p>Shipping Information!</p>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Street Address</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Street Address" value="<?php echo $customer_data[0]->street_address; ?>" name="street_address" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">City</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="City" value="<?php echo $customer_data[0]->city; ?>" name="city" required>
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-6">
                                        
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Province/State</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Province/State" value="<?php echo $customer_data[0]->state; ?>" name="state" required>

                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Postal Code</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Postal Code" value="<?php echo $customer_data[0]->postal_code; ?>" name="postal_code" required>
                                        </div>
                                       
                                    </div>
                                  
                                    


                                            <input class="btn btn-primary" type="submit" name="update_shipping_info" value="Update Shipping Address" style="float: right;">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>




                        <div class="tab-pane fade" id="password">

                            <div class="d-md-flex align-items-center">  
                                <div class="table-responsive">
                                    <div id="order_table_wrapper" class="dataTables_wrapper no-footer">
                           
                                        <form action="<?php echo base_url('home/myaccount');?>" method="post">
                                    <h2>Change your Password!</h2>
                                        <p> Change Your password!</p>
                                    <div class="col-sm-12">
                                        
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Current Password</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Current Password" name="current_password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">New Password</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="New Password" name="new_password" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-email" class="control-label">Confirm Password</label>
                                            <input type="text" class="form-control" id="input-email" placeholder="Confirm Password"  name="confirm_password" required>
                                        </div>
                                        
                                    </div>
                                  
                                  
                                    


                                            <input class="btn btn-primary" type="submit" name="update_password" value="Update Password" style="float: right;">
                                    </form>
                                    </div>
                                </div>
                            </div>
                            
                        </div>







              </div>






              <hr>

   </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


























