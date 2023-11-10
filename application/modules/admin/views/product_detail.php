







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



				<div class="row">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-body border-top">

                                <div class="row mb-0">

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                            <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>

                                            <div><span style="font-size: 20px;">Sold Out</span>

                                                <h3 class="font-medium mb-0"><?php echo $sold_products[0]->cnt; ?></h3>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- col -->

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                            <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>

                                            <div><span style="font-size: 20px;">Revenue</span>

                                                <h3 class="font-medium mb-0">PKR <?php if($p_price[0]->price == 0 || $p_price[0]->price == ''){

                                                	$price = $p_price[0]->new_price;

                                                	echo $price * $sold_products[0]->cnt;

                                                } else{ $price = $p_price[0]->price;

                                                	echo $price * $sold_products[0]->cnt;

                                                } ?></h3>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- col -->

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                            <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>

                                            <div><span style="font-size: 20px;">Profit</span>

                                                <h3 class="font-medium mb-0">PKR <?php if($p_price[0]->price == 0 || $p_price[0]->price == ''){

                                                	$price = $p_price[0]->new_price;

                                                	echo $price * $sold_products[0]->cnt;

                                                } else{ $price = $p_price[0]->price;

                                                	echo $price * $sold_products[0]->cnt;

                                                } ?></h3>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- col -->

                                </div>

                            </div>

                        </div>

                    </div>

                </div>







         <div class="content mt-3">

            <div class="animated fadeIn">

                <div class="row">

                    <!-- Model -->

                    <?php foreach ($product_detail as $sub) {

                    	# code...

                    } ?>



                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">

                            <strong class="card-title">PRODUCT INFO</strong>

                        </div>

                        <div class="card-body">

              

                                      



                                            <div class="row">

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Product ID</label>

                                                        <input type="text" readonly="" class="form-control" readonly  id="recipient-name1" name="product_id" value="<?php echo $sub->product_id; ?>">

                                                    </div>

                                                </div>

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Product Title</label>

                                                        <input type="text" readonly="" class="form-control" name="product_name" id="product_name" value="<?php if(isset($sub->product_name)){ echo $sub->product_name;}?>">

                                                    </div>

                                                </div>

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Category</label>

                                                        

                                                      <input type="text" readonly="" value="<?php echo $sub->category_name; ?>" class="form-control" id="recipient-name1">

                                                  </div>

                                              </div>



                                              <div class="col-3">





                                                <div class="form-group">

                                                    <label for="recipient-name" class="control-label">Select Sub Category</label>

                                                    

                                                    <input type="text" readonly="" value="<?php echo $sub->sub_category_name; ?>" class="form-control" id="recipient-name1">

                                                </div>





                                            </div>



                                                    <div class="col-3">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Video URL</label>

                                                            <input type="text" readonly="" name="video_url" value="<?php if(isset($sub->video_url)){ echo $sub->video_url;}?>" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-3">

                                                        <label for="recipient-name" class="control-label">Description</label>

                                                        <div class="form-group">

                                                            <textarea class="form-control" readonly=""  name="description" rows="3"><?php if(isset($sub->description)){ echo $sub->description;}?></textarea>

                                                        </div>

                                                    </div>

                                                    

                                                   

                                                </div>



                                                <hr>

                                                <div class="row">

                                                    <div class="col-12">

                                                        <h4>Expense Details</h4>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Stock</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->stock)){ echo $sub->stock;}?>"  name="stock" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Weight in Grams</label>

                                                            <input type="text" readonly="" value="<?php if(isset($sub->weight)){ echo $sub->weight;}?>" name="weight" placeholder="Weight in Grams" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Brand</label>

                                                            <input type="text" readonly="" value="<?php if(isset($sub->brand)){ echo $sub->brand;}?>" name="brand" placeholder="Brand" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>



                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Product Previous Cost</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->price)){ echo $sub->price;}?>" name="price" placeholder="Product Cost" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Product New Cost</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->new_price)){ echo $sub->new_price;}?>" name="new_price" placeholder="Product Offer Cost" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Transport charges</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->transport_charges)){ echo $sub->transport_charges;}?>" placeholder="Transport charges" name="transport_charges" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">System charges</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->system_charges)){ echo $sub->system_charges;}?>" placeholder="System charges"  name="system_charges" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Packing charges</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->packing_charges)){ echo $sub->packing_charges;}?>" placeholder="Packing charges" name="packing_charges" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">No of cv</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->no_of_cv)){ echo $sub->no_of_cv;}?>"  name="no_of_cv" placeholder="No of cv" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Cv cost</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->cv_cost)){ echo $sub->cv_cost;}?>"  name="cv_cost" placeholder="Cv cost" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Company total cost</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->company_total_cost)){ echo $sub->company_total_cost;}?>" placeholder="Company total cost"  name="company_total_cost" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Member retail price</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->member_retail_price)){ echo $sub->member_retail_price;}?>" placeholder="Member retail price"  name="member_retail_price" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Customer retail price</label>

                                                            <input type="number" readonly value="<?php if(isset($sub->customer_retail_price)){ echo $sub->customer_retail_price;}?>" placeholder="Customer retail price"  name="customer_retail_price" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>  

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Company profit</label><!---first it was profile thats why its name is profile--->

                                                            <input type="text" readonly="" value="<?php if(isset($sub->company_profile)){ echo $sub->company_profile;}?>" placeholder="Company profit"  name="company_profile" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>  

                                                    <div class="col-2">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Merchant Details</label>

                                                            <input type="text" readonly="" value="<?php if(isset($sub->merchant_details)){ echo $sub->merchant_details;}?>" placeholder="Merchant Details"  name="merchant_details" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>  



                                                   



                                            </div>



                                   

                                   

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

                            <strong class="card-title">Product Sizes</strong>

                        </div>

                        <div class="card-body">

                 <table class="table table-bordered table-striped">

                <thead>

                  <tr>

                    <th>#</th>

                    <th>Size</th>

                    <th>Color</th>

                    <th>Quantity</th>
                    
                    <th>Sold Out</th>

                  </tr>

                </thead>

                <tbody>

                    <?php 

                    $count = 1;

                    foreach ($sizes as $size){
                        $total += $size->quantity;
                        ?>

                    	<tr>

                        <td><?php echo $count++; ?></td>

                        <td><?php echo $size->size; ?></td>

                        <td><?php echo $size->color; ?></td>

                        <td><?php echo $size->quantity; ?></td>                        

                    </tr>

                    <?php }

                    

                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total</td>
                            <td><?php echo $total; ?></td>
                        </tr>

                    

                



                </tbody>

              </table>

                        </div>

                    </div>

                </div>

                </div>

            </div><!-- .animated -->

        </div><!-- .content -->



        <!-- Shipping info 1 -->











        

            </div>

