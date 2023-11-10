
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
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

        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change Shop Password</button>
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
          
         <form action="<?php echo base_url();?>admin/change_shop_password/<?php echo $this->uri->segment(3);?>" enctype="multipart/form-data" method="post">
             <div class="form-group">
                <input type="hidden" name="shop_id" value="<?php echo $this->uri->segment(3);?>">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Shop Password" id="shop_password" name="shop_password">
              </div> 
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="text" class="form-control" placeholder="Enter Shop Password" id="confirm_shop_password" name="confirm_shop_password">
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

        <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->
                <div class="col-md-6 col-md-offset-2 ">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Product Category</strong>
                        </div>
                        <div class="card-body">
                        	<?php foreach ($shop_data as $values){
                        		# code...
                        	} ?>
                		         <form action="<?php echo base_url();?>admin/update_shop/<?php echo $values->id;?>" method="post" enctype="multipart/form-data">
						            <div class="form-group">
						                <label>Shop Name</label>
						                <input type="text" class="form-control" name="shop_name" id="shop_name" value="<?php echo $values->shop_name;?>" placeholder="Enter Shop Name" >
						            </div> 
						            <div class="form-group">
						                <label>Shop Image</label>
						                <input type="file" class="form-control" name="shop_image" id="shop_image">
						            </div> 
						            <div class="form-group">
						                <label>Phone Number</label>
						                <input type="text" class="form-control" value="<?php echo $values->phone_number;?>" placeholder="Enter Shop Phone Number" id="shop_phone" name="shop_phone">
						            </div> 
						            <div class="form-group">
						                <label>Email</label>
						                <input type="email" class="form-control" value="<?php echo $values->email;?>" placeholder="Enter Shop Email" id="shop_email" name="shop_email">
						            </div> 
						            <div class="form-group">
						                <label>Shop Address</label>
						                <input type="text" class="form-control" value="<?php echo $values->address;?>" placeholder="Enter Shop Address" id="shop_address" name="shop_address">
						            </div> 
                        <div class="form-group">
                            <label>Shop Latitude</label>
                            <input type="text" class="form-control" value="<?php echo $values->shop_lat;?>" placeholder="Enter Shop Latitude Address" id="shop_lat" name="shop_lat">
                        </div> 
                        <div class="form-group">
                            <label>Shop Longitude</label>
                            <input type="text" class="form-control" value="<?php echo $values->shop_lng;?>" placeholder="Enter Shop Longitude Address" id="shop_lng" name="shop_lng">
                        </div> 
						            

						            <div class="form-group">
						                <input type="submit" name="submit" id="submit" value="Update" class="btn btn-success" style="float:right;">
						            </div>


						         </form>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



