





























                    <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active"><a href="#"><?php echo $title; ?></a></li>
                                    <!-- <li class="breadcrumb-item active" aria-current="page">Library</li> -->
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
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
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
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->


                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <button type="button" class="btn btn-success" style="text-align: right;"  data-toggle="modal" data-target="#myModal">Order Status</button>
                <button type="button" class="btn btn-info" onclick="printDiv('printableArea')" style="text-align: right;">Print Bill</button>
<div id="printableArea">
         <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">ORDER Info</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Tracking ID</th>
                    <th>CUSTOMER</th>
                    <th>PAYMENT</th>
                    <th>ORDER STATUS</th>
                  </tr>
                </thead>
                <tbody>
               
                

                </tbody>
                
                <tfoot>
                    <?php if(!empty($customer_order_info)){ 
                         $customer_name = $customer_order_info[0]->first_name.' '.$customer_order_info[0]->last_name;
                        ?>
                    <tr>
                        <td><?php echo $customer_order_info[0]->tracking_id; ?></td>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $customer_order_info[0]->order_payment_method; ?></td>
                        <td><?php echo $customer_order_info[0]->order_status; ?></td>
                    </tr>
                    <?php } ?>
                    <?php if(!empty($member_order_info)){ ?>
                    <tr>
                        <td><?php echo $member_order_info[0]->tracking_id; ?></td>
                        <td><?php echo $member_order_info[0]->member_name; ?></td>
                        <td><?php echo $member_order_info[0]->order_payment_method; ?></td>
                        <td><?php echo $member_order_info[0]->order_status; ?></td>
                    </tr>
                    <?php } ?>
                </tfoot>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- Shipping Info 1 -->

                  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Shipping Info</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    foreach ($order_info as $info){
                    }
                    $customer_name = $info->first_name.' '.$info->last_name;
                        ?>
                    
                

                </tbody>
                
                <tfoot>
                    <?php if(!empty($customer_order_info)){ 
                         $customer_name = $customer_order_info[0]->first_name.' '.$customer_order_info[0]->last_name;
                        ?>
                    <tr>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $customer_order_info[0]->email; ?></td>
                        <td><?php echo $customer_order_info[0]->phone; ?></td>
                        <td><?php echo $customer_order_info[0]->country; ?></td>
                        <td><?php echo $customer_order_info[0]->city; ?></td>
                        <td><?php echo $customer_order_info[0]->state; ?></td>
                        <td><?php echo $customer_order_info[0]->street_address; ?></td>
                        <td><?php echo $customer_order_info[0]->Note; ?></td>
                    </tr>
                    <?php } ?>

                    <?php if(!empty($member_order_info)){ 
                         
                        ?>
                    <tr>
                        <td><?php echo $member_order_info[0]->member_name; ?></td>
                        <td><?php echo $member_order_info[0]->member_email; ?></td>
                        <td><?php echo $member_order_info[0]->phone_number; ?></td>
                        <td><?php echo $member_order_info[0]->country; ?></td>
                        <td><?php echo $member_order_info[0]->city; ?></td>
                        <td><?php echo $member_order_info[0]->state; ?></td>
                        <td><?php echo $member_order_info[0]->address; ?></td>
                        <td><?php echo $member_order_info[0]->Note; ?></td>
                    </tr>
                    <?php } ?>
                </tfoot>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <!-- Shipping info 1 -->


                <!-- Shipping Info 2 -->

                <?php if(!empty($second_shipping_info)){?>

                
                  <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Second Shipping Info </strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Address</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tbody>
                    <?php 
                    
                    foreach ($second_shipping_info as $info){
                    }
                    $customer_name = $info->first_name.' '.$info->last_name;
                        ?>
                    
                

                </tbody>
                
                <tfoot>
                    <tr>
                        <td><?php echo $customer_name; ?></td>
                        <td><?php echo $info->email; ?></td>
                        <td><?php echo $info->phone; ?></td>
                        <td><?php echo $info->country; ?></td>
                        <td><?php echo $info->city; ?></td>
                        <td><?php echo $info->state; ?></td>
                        <td><?php echo $info->street_address; ?></td>
                        <td><?php echo $info->Note; ?></td>
                    </tr>
                </tfoot>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
<?php } ?>
        <!-- Shipping INfo 2-->






                        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Items</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>P ID</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Type</th>
                    <th>Created</th>
                    <!-- <th>Action</th> -->
                  </tr>
                </thead>
                <tbody>
                    <?php 
                        $count = 0;
                    foreach ($order_products as $products):
                        $customer_type = $products->customer_type;
                        $qty = $products->product_quantity;
                        $cv = $products->cv;

                        $member_new_price = $products->member_retail_price_new;
                        $member_price = $products->member_retail_price;

                        $customer_new_price = $products->customer_retail_price_new;
                        $customer_price = $products->customer_retail_price;

                        if ($customer_type == 'Customer' && $customer_new_price != 0) {
                            $price_will =  $customer_new_price;
                        }
                        elseif ($customer_type == 'Customer' && $customer_new_price == 0) {
                            $price_will =  $customer_price;
                        }

                        // $total_cv = $cv * $qty;

                        $count++;
                        ?>
                    <tr>
                        <td><?php echo $count; ?></td>
                        <td><?php echo $products->product_id; ?></td>
                        <td><?php echo $products->product_name; ?></td>
                        <td><a href='<?php echo base_url('home/product_details/'.$products->product_id.'/'.$products->p_info_id.''); ?>' target="_black"><img src="<?php echo base_url(); ?>product_images/<?php echo $products->sub_image; ?>" style="width: 50px; height: 50px;"></a> </td>
                        <td><?php echo $price_will; ?></td>
                        <td><?php echo $qty; ?></td>
                        <?php if($customer_type == 'Member'){?>
                        <td><?php echo $cv; ?></td>
                        <?php } ?>
                        <td><?php echo $products->customer_type; ?></td>
                        <td><?php echo $products->created_at; ?></td>
                        <!-- <td><button class="btn btn-info btn-xs">Edit</button></td> -->
                    </tr>
                <?php endforeach; ?>

                </tbody>
                
                <tfoot>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Grand Total</th>
                    <th><?php echo $products->order_grand_total; ?></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <!-- <th></th> -->
                  </tr>
                </tfoot>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

</div>

        <!-- change order status modal -->
        <div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Change Order Status</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


        <div class="modal-body">
                              <div class="card">
                      
                        <div class="card-body">
                          
                      <form action="<?php echo base_url();?>admin/change_order_status" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <label>Date</label>
                          <input type="date" class="form-control" name="delivery_date" id="delivery_date" placeholder="Enter Order Date">
                      </div>
                      <input type="hidden" name="order_id" value="<?php echo $this->uri->segment(3); ?>">
                       <div class="form-group">
                          <label>Order Status</label>
                          <select class="form-control" name="order_status" id="order_status" >
                            <option value="Received">Received</option>
                            <option value="Packed & Ready to Dispatched">Packed & Ready to Dispatched</option>
                            <option value="On the Way">On the Way</option>
                            <option value="Completed">Completed</option>
                            <option value="Delivered">Delivered</option>
                            <option value="Cancel By Customer">Cancel By Customer</option>
                            <option value="Pending">Pending</option>
                            <option value="Waiting For Payment">Waiting For Payment</option>
                            <option value="Canceled By Company">Canceled By Company</option>
                          </select>
                      </div> 
                 
                      <div class="form-group">

                       
                          <input type="submit" name="submit_order_status" id="submit_order_status" value="Submit" class="btn btn-success">
                         
                      </div>


                    </form>
                        </div>
                    </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
        <!-- change order status modal -->



        
            </div>
