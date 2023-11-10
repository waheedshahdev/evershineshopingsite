   <style>
        .card {
           position: relative;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           -webkit-box-orient: vertical;
           -webkit-box-direction: normal;
           -ms-flex-direction: column;
           flex-direction: column;
           min-width: 0;
           word-wrap: break-word;
           background-color: #fff;
           background-clip: border-box;
           border: 1px solid rgba(0, 0, 0, 0.1);
           border-radius: 0.10rem
       }

       .card-header:first-child {
           border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
       }

       .card-header {
           padding: 0.75rem 1.25rem;
           margin-bottom: 0;
           background-color: #fff;
           border-bottom: 1px solid rgba(0, 0, 0, 0.1)
       }

       .track {
           position: relative;
           background-color: #ddd;
           height: 7px;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           margin-bottom: 60px;
           margin-top: 50px
       }

       .track .step {
           -webkit-box-flex: 1;
           -ms-flex-positive: 1;
           flex-grow: 1;
           width: 25%;
           margin-top: -18px;
           text-align: center;
           position: relative
       }

       .track .step.active:before {
           background: #FF5722
       }

       .track .step::before {
           height: 7px;
           position: absolute;
           content: "";
           width: 100%;
           left: 0;
           top: 18px
       }

       .track .step.active .icon {
           background: #ee5435;
           color: #fff
       }

       .track .icon {
           display: inline-block;
           width: 40px;
           height: 40px;
           line-height: 40px;
           position: relative;
           border-radius: 100%;
           background: #ddd
       }

       .track .step.active .text {
           font-weight: 400;
           color: #000
       }

       .track .text {
           display: block;
           margin-top: 7px
       }

       .itemside {
           position: relative;
           display: -webkit-box;
           display: -ms-flexbox;
           display: flex;
           width: 100%
       }

       .itemside .aside {
           position: relative;
           -ms-flex-negative: 0;
           flex-shrink: 0
       }

       .img-sm {
           width: 80px;
           height: 80px;
           padding: 7px
       }

       ul.row,
       ul.row-sm {
           list-style: none;
           padding: 0
       }

       .itemside .info {
           padding-left: 15px;
           padding-right: 7px
       }

       .itemside .title {
           display: block;
           margin-bottom: 5px;
           color: #212529
       }
   </style>


<div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">My Order Details</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
     

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <h1>My Account</h1>
            <div class="content-page">




              
              <div class="tab-content">
                    <div class="tab-pane fade in show active" id="accounts">
                        <h3>My Order Details</h3>
                            <div class="d-md-flex align-items-center">
                                
                                   <article class="card" style="border-bottom: none;">
                                    <header class="card-header"> My Orders / Tracking </header>
                                    <div class="card-body">
                                        <h4 style="margin-left: 15px; font-weight: bold;">Order ID: <?php echo $order_data[0]->tracking_id; ?></h4>
                                        <article class="card">
                                            <div class="card-body row">
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Sub Total:</strong> <br><?php echo $order_data[0]->sub_total; ?> </div>
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Grand Total:</strong> <br><?php echo $order_data[0]->order_grand_total; ?> </div>
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Promo Discount:</strong> <br><?php echo $order_data[0]->promo_discount; ?> </div>
                                            </div>
                                            <div class="card-body row">


                                                <div class="col-md-3" style="padding: 20px;"> <strong>Payment Method:</strong> <br><?php echo $order_data[0]->order_payment_method; ?> </div>
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Order Status:</strong> <br><?php echo $order_data[0]->order_status; ?> </div>
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Estimated Delivery Date:</strong> <br><?php echo $order_data[0]->delivery_date; ?> </div>
                                            
                                                
                                            </div>
                                            <div class="card-body row">



                                                <div class="col-md-3" style="padding: 20px;"> <strong>Comment:</strong> <br><?php echo $order_data[0]->comment_about_order; ?> </div>
                                                <div class="col-md-3" style="padding: 20px;"> <strong>Created At:</strong> <br><?php echo $order_data[0]->created_at; ?> </div>
                                                <!-- <div class="col-md-3" style="padding: 20px;"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div>
                                                    <div class="col-md-3" style="padding: 20px;"> <strong>Estimated Delivery time:</strong> <br>29 nov 2019 </div> -->
                                                    <div class="col-md-3" style="padding: 20px;"> <strong>Tracking #:</strong> <br> <?php echo $order_data[0]->tracking_id; ?> </div>
                                                </div>
                                                <div class="card-body row">




                                                <!-- <div class="col-md-3" style="padding: 20px;"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
                                                    <div class="col-md-3" style="padding: 20px;"> <strong>Status:</strong> <br> Picked by the courier </div> -->

                                                </div>

                                            </article>
                                            <div class="track">
                                                <?php $status = $order_data[0]->order_status;
                                                if($status == 'Pending'){
                                                    $step_1= 'active';
                                                    $step_2= '';
                                                    $step_3= '';
                                                    $step_4= '';
                                                    $stats_1 = $status;
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = 'Delivered';
                                                }
                                                elseif ($status == 'Packed & Ready to Dispatched') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= '';
                                                    $step_4= '';
                                                    
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = $status;
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = 'Delivered';

                                                }
                                                elseif ($status == 'On the Way') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= 'active';
                                                    $step_4= '';
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = $status;
                                                    $stats_4 = 'Delivered';
                                                }
                                                elseif ($status == 'Cancel By Customer') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= 'active';
                                                    $step_4= 'active';
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = $status;
                                                }
                                                elseif ($status == 'Cancel By Company') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= 'active';
                                                    $step_4= 'active';
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = $status;
                                                }
                                                elseif ($status == 'Waiting for Payment') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= 'active';
                                                    $step_4= 'active';
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = $status;
                                                }
                                                elseif ($status == 'Delivered') {
                                                    $step_1= 'active';
                                                    $step_2= 'active';
                                                    $step_3= 'active';
                                                    $step_4= 'active';
                                                    $stats_1 = 'Pending';
                                                    $stats_2 = 'Packed & Ready to Dispatched';
                                                    $stats_3 = 'On the Way';
                                                    $stats_4 = $status;
                                                }
                                                
                                                ?>
                                                <div class="step <?php echo $step_1; ?>"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text"><?php echo $stats_1 ?></span> </div>
                                                <div class="step <?php echo $step_2; ?>"> <span class="icon"> <i class="fa fa-inbox"></i> </span> <span class="text"><?php echo $stats_2 ?></span> </div>
                                                <div class="step <?php echo $step_3; ?>"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"><?php echo $stats_3 ?></span> </div>

                                                <div class="step <?php echo $step_4; ?>"> <span class="icon"> <i class="fa fa-inbox"></i> </span> <span class="text"><?php echo $stats_4 ?></span> </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-12">
                                                   <table class="table table-bordered table-striped">
                                                    <thead>

                                                        <tr>
                                                            <th class="text-center">#</th>
                                                            <th>Product ID</th>
                                                            <th>Image</th>
                                                            <th>Product Name</th>
                                                            <th>Qty</th>
                                                            <th>Category</th>
                                                            <th>Size</th>
                                                            <th>Price</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                       <?php $count = 1; foreach ($order_detail as $detail):
                                                            $customer_retail_price = $detail->customer_retail_price;
                                                            $customer_retail_price_new = $detail->customer_retail_price_new;
                                                            if(empty($customer_retail_price_new) || $customer_retail_price_new == 0){
                                                                $price = $customer_retail_price;
                                                            }
                                                            else{
                                                                $price = $customer_retail_price_new;
                                                            }
                                                       ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $count++; ?></td>
                                                            <td><?php echo $detail->product_id; ?></td>
                                                            <td class="text-center"><img src="<?php echo base_url('product_images/'.$detail->sub_image.''); ?>" style="width: 50px; height: 50px;"></td>
                                                            <td><?php echo $detail->product_name; ?></td>
                                                            <td><?php echo $detail->product_quantity; ?></td>
                                                            <td><?php echo $detail->category_name; ?></td>
                                                            <td><?php echo $detail->size; ?></td>
                                                            <td><?php echo $detail->size_price; ?></td>
                                                            
                                                        </tr>
                                                    <?php endforeach; ?> 
                                                   
                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                    <hr>
                                    <a href="<?php echo base_url(); ?>home/myaccount" class="btn btn-warning" data-abc="true"> <i style="position:relative; top: 3px;
                                    margin-right: 10px;" class="fa fa-chevron-left"></i> Back to orders</a>
                                </div>
                            </article>
                            </div>


                        </div>

              </div>






              <hr>

   </div>
          </div>
      
        </div>
       
      </div>
    </div>












