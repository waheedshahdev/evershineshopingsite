
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?php echo $title;?></h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active"><?php echo $title;?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Item to Shop</button>
            </div>
            <div class="col-md-6">
               <a href="<?php echo base_url();?>admin/add_category_shop/<?php echo $this->uri->segment(3);?>" class="btn btn-info btn-lg" style="float: right;"  >Assign Category to Shop</a>
            </div>
          </div>
        </div>


 <div class="container">


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
   
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
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
         <form id="add_shop_product">
            
            <div class="form-group">
              <input type="hidden" name="shop_id" id="shop_id" value="<?php echo $this->uri->segment(3);?>">
                <label>Category</label>
                <select class="form-control" name="shop_category_id" id="shop_category_id" required="">
                  <option value="">Please Select One Category</option>
                  <?php foreach ($category as $value):?>
                      <option value="<?php echo $value->cat_id;?>"><?php echo $value->category_name;?></option>
                  <?php endforeach;?>

                </select>
            </div> 
            <div class="form-group">
                <label>Product Name</label>
            
                <select class="form-control" name="sub_category_id" id="sub_category_id" required="">
                  

                </select>
            </div> 
          
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" placeholder="Enter Product Price" id="price" name="price">
            </div> 
            
            <div class="form-group">
                <label>Description (Optional)</label>
                <input type="text" class="form-control" placeholder="Enter Description" id="description" name="description">
            </div> 
            

            <div class="form-group">
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success" style="float:right;">
            </div>


         </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
                    <!-- end model -->
                    <?php foreach ($shopname as $value) {
                      # code...
                    } ?>

        <div class="content mt-3">
            <div class="animated fadeIn">
              <center><h2><?php echo $value->shop_name;?></h2></center>
                <div class="row">
                    <!-- Model -->

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Shop Products</strong>
                        </div>
                        <div class="card-body">
                 <table id="product_table" class="table table-bordered table-striped">
                  <input type="hidden" name="shop_id" id="shop_id" value="<?php echo $this->uri->segment(3);?>">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Category</th>
                    <th>Product Name</th>
                    <th>Product Image</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                </tbody>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->