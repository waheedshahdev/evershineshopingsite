
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
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Notification</button>
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
        	
         <form action="<?php echo base_url();?>admin/notification" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Notification</label>
                <input type="text" class="form-control" name="notification" id="notification" placeholder="Enter Shop Name">
            </div> 
            <div class="form-group">
                <label>Add Promo Code</label>
                <input type="text" class="form-control" placeholder="Enter Shop Phone Number" id="promo_code" name="promo_code">
            </div> 
            <div class="form-group">
                <label>Promo Price</label>
                <input type="text" class="form-control" placeholder="Enter Shop Email" id="promo_price" name="promo_price">
            </div> 
            <div class="form-group">
                <label>Notification Image</label>
                <input type="file" class="form-control" placeholder="Enter Shop Password" id="notification_image" name="notification_image">
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
                    <!-- end model -->
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Users Data</strong>
                        </div>
                        <div class="card-body">
                 <table id="notification_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Notification</th>
                    <th>Promo Code</th>
                    <th>Promo Price</th>
                    <th>Image</th>
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