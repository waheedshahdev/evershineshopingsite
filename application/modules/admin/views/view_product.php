







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

                                                <h3 class="font-medium mb-0"><?php echo $sold_products[0]->total_products; ?></h3>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- col -->

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                            <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>

                                            <div><span style="font-size: 20px;">Company Profit</span>
                                                <h3 class="font-medium mb-0"><?php echo $revenue[0]->c_profit; ?></h3>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- col -->

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                           <!--  <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>

                                           -->

                                        </div>

                                    </div>

                                    <!-- col -->

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- ============================================================== -->

                <!-- Sales chart -->

                <!-- ============================================================== -->




         <div class="content mt-3">

            <div class="animated fadeIn">

                <div class="row">

                    <!-- Model -->
                    <?php foreach ($product_detail as $sub) {

                    	# code...

                    } ?>



                <div class="col-md-12">
<a href="<?php echo base_url('admin/product_expense/'.$this->uri->segment(3).''); ?>" class="btn btn-success" >Add Product Expense</a>
                    <div class="card">

                        <div class="card-header">

                            <strong class="card-title">PRODUCT INFO</strong>

                        </div>

                        <div class="card-body">

                                    <form action="<?php echo base_url('admin/view_product/'.$this->uri->segment(3).''); ?>" method="post">

                                            <div class="row">

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Product ID</label>

                                                        <input type="text" class="form-control"  id="recipient-name1" name="product_id" value="<?php echo $sub->product_id; ?>">

                                                    </div>

                                                </div>

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Product Title</label>

                                                        <input type="text" class="form-control" name="product_name" id="product_name" value="<?php if(isset($sub->product_name)){ echo $sub->product_name;}?>">

                                                    </div>

                                                </div>

                                                <div class="col-3">

                                                    <div class="form-group">

                                                        <label for="recipient-name" class="control-label">Category</label>
                                                        <select class="form-control" id="recipient-name1" name="category_id">

                                                            <?php foreach ($category as $value) {?>
                                                            <option value="<?php echo $value->id; ?>" <?php if($sub->category_name == $value->category_name){ echo 'selected="selected"';} ?>><?php echo $value->category_name; ?></option>    
                                                            <?php } ?>
                                                        </select>

                                                  </div>

                                              </div>



                                              <div class="col-3">





                                                <div class="form-group">

                                                    <label for="recipient-name" class="control-label">Select Sub Category</label>

                                                    <select class="form-control" id="recipient-name1" name="sub_cat_id">
                                                        <?php foreach ($sub_category as $value) {?>
                                                            <option value="<?php echo $value->id; ?>" <?php if($sub->sub_category_name == $value->sub_category_name){ echo 'selected = "selected"';} ?>><?php echo $value->sub_category_name; ?></option>
                                                        <?php } ?>
                                                    </select>

                                                </div>

                                            </div>



                                                    <div class="col-3">

                                                        <div class="form-group">

                                                            <label for="recipient-name" class="control-label">Video URL</label>

                                                            <input type="text" name="video_url" value="<?php if(isset($sub->video_url)){ echo $sub->video_url;}?>" class="form-control" id="recipient-name1">

                                                        </div>

                                                    </div>

                                                    <div class="col-3">

                                                        <label for="recipient-name" class="control-label">Description</label>

                                                        <div class="form-group">

                                                            <textarea class="form-control"  name="description" rows="3"><?php if(isset($sub->description)){ echo $sub->description;}?></textarea>

                                                        </div>

                                                    </div>

                                                    <div class="col-3">

                                                        <label for="recipient-name" class="control-label"></label>

                                                        <div class="form-group" style="margin-top: 20px;">

                                                            <button type="submit" class="btn btn-success" name="submit" value="Update Product" >Update Product</button>

                                                        </div>

                                                    </div>

                                                    

                                                   

                                                </div>
                                                </form>



                                                <hr>

                        </div>

                    </div>

                </div>










                <?php 

                if(!empty($product_expense_info)){

                	foreach ($product_expense_info as $expense) {

                		if($expense->product_status == 'Active'){
                			$back_color = 'style="background-color: #78d878;"';
                		}
                		else{
                			$back_color = '';
                		}
                	$product_total_cost = $expense->product_cost + $expense->transport_charges + $expense->system_charges + $expense->packing_charges + $expense->cv_cost;
                	?>

                

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header" <?php echo $back_color; ?>>

                            <strong class="card-title">PRODUCT Expense Detail</strong>
                            <a href="<?php echo base_url('admin/add_stock/'.$expense->product_id.'/'.$expense->id.''); ?>" class="btn btn-success" style="float: right;">Add Stock</a>
                        </div>

                        <div class="card-body">

              
                                        <form action="<?php echo base_url('admin/view_product/'.$this->uri->segment(3).''); ?>" method="post">
                                                <div class="row">

                                                    <div class="col-12">

                                                        <h4>Expense Details  <span style="float: right;">Product Total Cost: <?php echo $product_total_cost; ?></span></h4> 

                                                    </div>
                                                    

                                                    
                                                  

                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Cost</label>
                                                            <input type="number" value="<?php if(isset($expense->product_cost)){ echo $expense->product_cost;}?>" name="product_cost" placeholder="Product Cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                   
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Customer retail price</label>
                                                            <input type="number" value="<?php if(isset($expense->customer_retail_price)){ echo $expense->customer_retail_price;}?>" placeholder="Customer retail price"  name="customer_retail_price" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>  
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Customer retail price New</label>
                                                            <input type="number" value="<?php if(isset($expense->customer_retail_price_new)){ echo $expense->customer_retail_price_new;}?>" placeholder="Customer retail price"  name="customer_retail_price_new" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div> 

                                                    
                                                  
                                                   
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Status</label>
                                                            <select name="product_status" class="form-control" id="recipient-name1">

                                                            	<option value="Active" <?php if($expense->product_status == 'Active'){ echo 'selected="selected"';} ?>>Active</option>
                                                            	<option value="Block" <?php if($expense->product_status == 'Block'){ echo 'selected="selected"';} ?>>Block</option>
                                                            	<option value="Out of Stock" <?php if($expense->product_status == 'Out of Stock'){ echo 'selected="selected"';} ?>>Out of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Area</label>
                                                            <select name="product_area" class="form-control" id="recipient-name1">

                                                                <option value="New Arrival" <?php if($expense->product_area == 'New Arrival'){ echo 'selected="selected"';} ?>>New Arrival</option>
                                                         
                                                                <option value="BestSeller" <?php if($expense->product_area == 'BestSeller'){ echo 'selected="selected"';} ?>>BestSeller</option>
                                       
                                                         
                                                                <option value="Latest" <?php if($expense->product_area == 'Latest'){ echo 'selected="selected"';} ?>>Latest</option>
                                                                <option value="Featured" <?php if($expense->product_area == 'Featured'){ echo 'selected="selected"';} ?>>Featured</option>
                                                                <option value="Regular" <?php if($expense->product_area == 'Regular'){ echo 'selected="selected"';} ?>>Regular</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div> 
                                                    <input type="hidden" name="p_info_id" value="<?php echo $expense->id; ?>">
                                                    <div class="col-2">
                                                        <div class="form-group">
                                                           <button class="btn btn-success" type="submit" name="submit" value="Update Product Info" style="margin-top: 28px;">Update Product Info</button>
                                                            
                                                        </div>
                                                    </div> 

                                            </div>
                                            </form>

                                            <!-- product Stock -->








        <div class="content mt-3">

            <div class="animated fadeIn">

                <div class="row">

                <div class="col-md-12">

                    <div class="card">

                        <div class="card-header">

                            <strong class="card-title">Product Stock</strong>

                        </div>

                        <div class="card-body">

                 <table class="table table-bordered table-striped">

                <thead>

                  <tr>

                    <th>#</th>

                    <th>Size</th>

                    <th>Color</th>
                    <th>Size Price</th>

                    <th>Quantity</th>
                    
                    <th>Sold Out</th>
                    <th>Action</th>

                  </tr>

                </thead>

                <tbody>

                    <?php 
                    $stock_id = $expense->id;
                    $count = 1;
                    $fetch_stock = get_query_data('SELECT * FROM tbl_product_sizes where p_info_id = '.$stock_id.'');
                    foreach ($fetch_stock as $size){
                        $total += $size->quantity;
                        
                        ?>

                        <tr>

                        <td><?php echo $count++; ?></td>

                        <td><?php echo $size->size; ?></td>

                        <td><?php echo $size->color; ?></td>
                        <td><?php echo $size->size_price; ?></td>

                        <td><?php echo $size->quantity; ?></td>     
                        <td><?php echo $size->total_sold; ?></td>                   
                        <td><a href="<?php echo base_url('admin/edit_stock/'.$size->id.'/'.$this->uri->segment(3).''); ?>" class="btn btn-primary">Edit</a></td>                   

                    </tr>

                    <?php }

                    

                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <!-- <td>Total</td> -->
                            <td><?php //echo $total; ?></td>
                        </tr>

                </tbody>

              </table>

                        </div>

                    </div>

                </div>

                </div>

            </div><!-- .animated -->

        </div><!-- .content -->
<!-- END product Stock -->

















                        </div>

                    </div>

                </div>
<?php } } ?>







                </div>

            </div><!-- .animated -->

        </div><!-- .content -->















        <!-- Shipping Info 1 -->














        

            </div>

