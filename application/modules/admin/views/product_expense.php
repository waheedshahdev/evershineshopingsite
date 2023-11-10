
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="margin-left: 20px;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
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
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->

                        <?php
                        $id = $this->uri->segment(4); 
                        if ($id != '') {?>

                            <button type="button" class="btn btn-info" style="float: right;" data-toggle="modal" data-target="#myModal">Add Size & Color</button>

                        <?php }
                        ?>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="zero_config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                                <?php foreach ($sub_category_data as $sub) {
                            # code...
                                } ?>


                                <div class="row">
                                    <div class="col-sm-12">
                                        <form action="<?php echo base_url();?>admin/product_expense/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Expense Details</h4>
                                                    </div>
                                                    
                                                    
                                                    

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Cost</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->price)){ echo $sub->price;}?>" name="product_cost" placeholder="Product Cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Customer retail price</label>
                                                            <input type="number" value="<?php if(isset($sub->customer_retail_price)){ echo $sub->customer_retail_price;}?>" placeholder="Customer retail price"  name="customer_retail_price" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>  
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Customer retail price New</label>
                                                            <input type="number" value="<?php if(isset($sub->customer_retail_price_new)){ echo $sub->customer_retail_price_new;}?>" placeholder="Customer retail price"  name="customer_retail_price_new" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div> 
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Status</label>
                                                            <select name="product_status" class="form-control" id="recipient-name1">
                                                            	<option value="Active">Active</option>
                                                            	<option value="Block">Block</option>
                                                            	<option value="Out of Stock">Out of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>  
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Area</label>
                                                            <select name="product_area" class="form-control" id="recipient-name1" required>
                                                                <option value="">Select Option</option>
                                                                <option value="New Arrival">New Arrival</option>
                                                                <option value="BestSeller">BestSeller</option>
                                                                <option value="Latest">Latest</option>
                                                                <option value="Featured">Featured</option>
                                                                <option value="Regular">Regular</option>
                                                            </select>
                                                        </div>
                                                    </div>  

                                                    <div class="col-6">
                                                        <div class="form-group">

                                                         <?php 
                                                         $id = $this->uri->segment(4);
                                                         if($id == ''){
                                                            ?>
                                                            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
                                                        <?php }
                                                        elseif ($id != '') {?>

                                                            <input type="submit" name="submit" id="submit" value="Update" class="btn btn-success">

                                                        <?php }
                                                        ?>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>

        <!-- Add product Sizes -->
        <div class="container">
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Product Sizes</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <form action="<?php echo base_url('admin/add_product/'.$this->uri->segment(3).''); ?>" method="post">

                    <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Size</label>
                            <input type="text" name="size" placeholder="Enter Product Size" class="form-control" id="recipient-name1">
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Color</label>
                            <input type="text" name="color" placeholder="Product Color" class="form-control" id="recipient-name1">
                        </div>
                    </div>
                    <input type="hidden" name="size_product_id" value="<?php echo $sub->product_id; ?>">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Quantity</label>
                            <input type="number" name="quantity" placeholder="Enter Quantity" class="form-control" id="recipient-name1">
                        </div>
                    </div>
                    <input type="submit" name="submit" id="submit" value="Add Size" class="btn btn-success">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
      </div>
      
  </div>
</div>

</div>
<!-- END Product Sizes -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
