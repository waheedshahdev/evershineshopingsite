
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

       




        <div class="container">
  <button type="button" class="btn btn-info btn-lg" style="float: right" data-toggle="modal" data-target="#myModal_delivery">Add Delivery</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal_delivery" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Delivery Coupon</h4>
        </div>
        <div class="modal-body">


           <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Delivery Price</strong>
                        </div>
                        <div class="card-body">
                       
                		  <form action="<?php echo base_url();?>admin/delivery" method="post" enctype="multipart/form-data">
                			 <div class="form-group">
					                <label>Delivery Price</label>
					                <input type="text" class="form-control" name="delivery_price" id="delivery_price" placeholder="Enter Couopn">
					            </div> 
                  
                      <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status" id="status">
                          
                          	<option value=""> Select One</option>
                          	<option value="Active">Active</option>
                          	<option value="Expire">Expire</option>
                          </select>
                      </div> 
                      <input type="hidden" name="delivery_id" id="delivery_id">
					            
					            <div class="form-group">
					                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
					            </div>


                		</form>
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>









        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Discount Coupon</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Delivery Price</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                	<?php 
                	$count = 1;
                	foreach ($delivery as $del):
                			$count = $count++;
                			$status = $del->status;
                			if($status == 'Active')
                			{
                				$stat = '<span class="label label-success">Active</span>';
                			}
                			elseif ($status == 'Expire') {
                				$stat = '<label class="label label-danger" style="color:red;">Expire</label>';
                			}

                		?>
                	<tr>
                		<td><?php echo $count; ?></td>
                		<td><?php echo $del->delivery_price; ?></td>
                		<td><?php echo $stat; ?></td>
                		<td><?php echo $del->created_at; ?></td>
                		<td><button type="button" class="btn btn-info btn-xs edit_delivery" id="<?php echo $del->id; ?>">Edit</button></td>
                	</tr>
                <?php endforeach; ?>

                </tbody>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        <!-- Delivery Coupon -->

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->
  <button type="button" class="btn btn-info btn-lg" style="float: right" data-toggle="modal" data-target="#myModal_delivery_coupon">Add Delivery Coupon</button>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Discount Coupon</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Delivery Price</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                	<?php 
                	$count = 1;
                	foreach ($delivery_coupon as $coupon):
                			$count = $count++;
                			$status = $coupon->delivery_status;
                			if($status == 'Active')
                			{
                				$stat = '<span class="label label-success">Active</span>';
                			}
                			elseif ($status == 'Expire') {
                				$stat = '<label class="label label-danger" style="color:red;">Expire</label>';
                			}

                		?>
                	<tr>
                		<td><?php echo $count; ?></td>
                		<td><?php echo $coupon->delivery_coupon; ?></td>
                		<td><?php echo $stat; ?></td>
                		<td><?php echo $coupon->created_at; ?></td>
                		<td><button type="button" class="btn btn-info btn-xs edit_delivery_coupon" id="<?php echo $coupon->id; ?>">Edit</button></td>
                	</tr>
                <?php endforeach; ?>

                </tbody>

              </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->



        <!-- delivery Couppn Modal Code -->
                <div class="container">


  <!-- Modal -->
  <div class="modal fade" id="myModal_delivery_coupon" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Delivery Coupon</h4>
        </div>
        <div class="modal-body">


           <div class="content mt-4">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Delivery Coupon</strong>
                        </div>
                        <div class="card-body">
                       
                		  <form action="<?php echo base_url();?>admin/delivery_coupon" method="post" enctype="multipart/form-data">
                			 <div class="form-group">
					                <label>Delivery Coupon</label>
					                <input type="text" class="form-control" name="delivery_coupon" id="delivery_coupon" placeholder="Enter Couopn">
					            </div> 
                  
                      <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="delivery_status" id="delivery_status">
                          
                          	<option value=""> Select One</option>
                          	<option value="Active">Active</option>
                          	<option value="Expire">Expire</option>
                          </select>
                      </div> 
                      <input type="hidden" name="delivery_coupon_id" id="delivery_coupon_id">
					            
					            <div class="form-group">
					                <input type="submit" name="submit_delivery_coupon" id="submit_delivery_coupon" value="Submit" class="btn btn-success">
					            </div>


                		</form>
                        </div>
                    </div>
                </div>

                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>