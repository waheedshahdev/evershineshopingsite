
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
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Shop</button>
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
        	
         <form id="add_shop" enctype="multipart/form-data">
            <div class="form-group">
                <label>Shop Name</label>
                <input type="text" class="form-control" name="shop_name" id="shop_name" placeholder="Enter Shop Name">
            </div> 
            <div class="form-group">
                <label>Shop Image</label>
                <input type="file" class="form-control" name="shop_image" id="shop_image">
            </div> 
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" class="form-control" placeholder="Enter Shop Phone Number" id="shop_phone" name="shop_phone">
            </div> 
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter Shop Email" id="shop_email" name="shop_email">
            </div> 
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" placeholder="Enter Shop Password" id="shop_password" name="shop_password">
            </div> 
            <div class="form-group">
                <label>Shop Address</label>
                <input type="text" class="form-control" placeholder="Enter Shop Address" id="shop_address" name="shop_address">
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
                 <table id="shop_table" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Shop Name</th>
                    <th>Shop Pic</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
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