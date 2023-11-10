





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
                    <!-- Model -->
                <div class="col-md-6 col-md-offset-2 ">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Discount Coupon</strong>
                        </div>
                        <div class="card-body">
                          <?php foreach ($discount_data as $value) {
                            # code...
                          } ?>
                      <form action="<?php echo base_url();?>admin/discount_coupon/<?php echo $value->id;?>" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <label>Discount coupon</label>
                          <input type="text" class="form-control" name="discount_coupon" id="discount_coupon" placeholder="Enter Couopn" value="<?php echo $value->discount_coupon;?>">
                      </div> 
                      <div class="form-group">
                          <label>Discount Percentage</label>
                          <input type="text" class="form-control" name="discount_amount" id="discount_amount" placeholder="Enter Discount Amount" value="<?php echo $value->discount_amount;?>">
                      </div> 
                      <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status" id="status">
                          
                             <?php if(isset($value->status)){
                                 echo '<option value="'.$value->status.'">'.$value->status.'</option>';
                               } ?>
                            <option value=""> Select One</option>
                            <option value="Active">Active</option>
                            <option value="Expire">Expire</option>
                          </select>
                      </div> 
                      
                 
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


                    </form>
                        </div>
                    </div>
                </div>


                </div>


                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
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
                    <th>Discount Coupon</th>
                    <th>Discount Percentage</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                  $count = 1;
                  foreach ($discount_coupons as $coupon):
                      $count = $count++;
                      $status = $coupon->status;
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
                    <td><?php echo $coupon->discount_coupon; ?></td>
                    <td><?php echo $coupon->discount_amount; ?></td>
                    <td><?php echo $stat; ?></td>
                    <td><?php echo $coupon->created_at; ?></td>
                    <td><a href="<?php echo base_url('admin/discount_coupon/'.$coupon->id.''); ?>" class="btn btn-info btn-xs">Edit</a></td>
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


        
            </div>