
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
                        $id = $this->uri->segment(3); 
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
                                        <form action="<?php echo base_url();?>admin/add_product/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">

                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Product ID</label>
                                                        <input type="text" class="form-control"  id="recipient-name1" name="product_id" value="<?php if(isset($sub->product_id)){ echo $sub->product_id;} else{ echo rand(00000000,99999999);}?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Product Title</label>
                                                        <input type="text" class="form-control" placeholder="Product Title" name="product_name" id="product_name" value="<?php if(isset($sub->product_name)){ echo $sub->product_name;}?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="control-label">Category</label>
                                                        <select name="category_id" class="form-control" required="">
                                                           <?php if(isset($sub->category_id)){
                                                              echo '<option value="'.$sub->category_id.'">'.$sub->category_name.'</option>';
                                                          } ?>
                                                          <option>----</option>
                                                          <?php foreach ($category as $value):?>
                                                              <option value="<?php echo $value->id;?>"><?php echo $value->category_name;?></option>
                                                          <?php endforeach;?>
                                                      </select>
                                                  </div>
                                              </div>

                                              <div class="col-6">


                                                <div class="form-group">
                                                    <label for="recipient-name" class="control-label">Select Sub Category</label>
                                                    <select name="sub_cat_id" class="form-control">
                                                        <?php
                                                        $sub_cat_id = $sub->sub_cat_id;
                                                        if(isset($sub_cat_id)){
                                                            $get_sub_cat = select_columns('sub_category_name','tbl_sub_category','id='.$sub_cat_id.'');
                                                            echo '<option value="'.$sub->sub_cat_id.'">'.$get_sub_cat[0]->sub_category_name.'</option>';
                                                        } ?>
                                                        <option>----</option>
                                                        <?php foreach ($sub_category as $value):?>
                                                            <option value="<?php echo $value->id;?>"><?php echo $value->sub_category_name;?></option>
                                                        <?php endforeach;?>
                                                    </select>
                                                </div>


                                            </div>


                                                   <!--  <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Member Price </label>
                                                            <input type="number" name="member_price" class="form-control" id="recipient-name1" value="<?php //if(isset($sub->member_price)){ echo $sub->member_price;}?>">
                                                        </div>
                                                    </div> -->

                                                    <!-- <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">CV</label>
                                                            <input type="number" name="cv" value="<?php //if(isset($sub->cv)){ echo $sub->cv;}?>" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Video URL</label>
                                                            <input type="text" name="video_url" value="<?php if(isset($sub->video_url)){ echo $sub->video_url;}?>" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="recipient-name" class="control-label">Description</label>
                                                        <div class="form-group">
                                                            <textarea class="form-control"  name="description" rows="3"><?php if(isset($sub->description)){ echo $sub->description;}?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-6">
                                                        <fieldset class="form-group">
                                                            <label for="recipient-name" class="control-label">Title Image</label>
                                                            <input type="file"  value="<?php if(isset($sub->sub_image)){ echo $sub->sub_image;}?>" name="sub_image" class="form-control-file" id="exampleInputFile">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-6">
                                                        <fieldset class="form-group">
                                                            <label for="recipient-name" class="control-label">Other Images</label>
                                                            <input type="file" class="form-control-file"  name="userfile[]" id="userfile" placeholder="Enter Product Images" multiple="multiple">
                                                        </fieldset>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Expense Details</h4>
                                                    </div>
                                                    <!-- <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Stock</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->stock)){ echo $sub->stock;}?>"  name="stock" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div> -->
                                                    
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Weight in Grams</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="text" value="<?php if(isset($sub->weight)){ echo $sub->weight;}?>" name="weight" placeholder="Weight in Grams" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Brand</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="text" value="<?php if(isset($sub->brand)){ echo $sub->brand;}?>" name="brand" placeholder="Brand" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product Previous Cost</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->price)){ echo $sub->price;}?>" name="price" placeholder="Product Cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Product New Cost</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->new_price)){ echo $sub->new_price;}?>" name="new_price" placeholder="Product Offer Cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Transport charges</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->transport_charges)){ echo $sub->transport_charges;}?>" placeholder="Transport charges" name="transport_charges" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">System charges</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->system_charges)){ echo $sub->system_charges;}?>" placeholder="System charges"  name="system_charges" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Packing charges</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->packing_charges)){ echo $sub->packing_charges;}?>" placeholder="Packing charges" name="packing_charges" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">No of cv</label>
                                                            <input type="number" value="<?php if(isset($sub->no_of_cv)){ echo $sub->no_of_cv;}?>"  name="no_of_cv" placeholder="No of cv" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Cv cost</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->cv_cost)){ echo $sub->cv_cost;}?>"  name="cv_cost" placeholder="Cv cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Company total cost</label><span style="font-weight: bolder;color: red;font-size: 25px;line-height: 0;">*</span>
                                                            <input type="number" value="<?php if(isset($sub->company_total_cost)){ echo $sub->company_total_cost;}?>" placeholder="Company total cost"  name="company_total_cost" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Member retail price</label>
                                                            <input type="number" value="<?php if(isset($sub->member_retail_price)){ echo $sub->member_retail_price;}?>" placeholder="Member retail price"  name="member_retail_price" class="form-control" id="recipient-name1">
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
                                                            <label for="recipient-name" class="control-label">Company profit</label><!---first it was profile thats why its name is profile--->
                                                            <input type="text" value="<?php if(isset($sub->company_profile)){ echo $sub->company_profile;}?>" placeholder="Company profit"  name="company_profile" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>  
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="control-label">Merchant Details</label>
                                                            <input type="text" value="<?php if(isset($sub->merchant_details)){ echo $sub->merchant_details;}?>" placeholder="Merchant Details"  name="merchant_details" class="form-control" id="recipient-name1">
                                                        </div>
                                                    </div>  

                                                    <div class="col-6">
                                                        <div class="form-group">

                                                         <?php 
                                                         $id = $this->uri->segment(3);
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
