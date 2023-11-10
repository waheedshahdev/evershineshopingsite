
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
                		<form action="<?php echo base_url();?>admin/product_type" method="post" enctype="multipart/form-data">
                			
					            <div class="form-group">
			                        <label>Product Type Name</label>
			                        <input type="text" class="form-control" name="product_type" id="product_type">
			                     </div> 
			                     
					       
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


        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- Model -->


                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Items</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Product Type</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php foreach ($product_type as $values):?>
                	<tr>
                		<td><?php echo $values->id; ?></td>
                		<td><?php echo $values->product_type; ?></td>
                		<td><?php echo $values->status; ?></td>
                		<td><?php echo $values->created_at; ?></td>
                		<td><a href="<?php echo base_url();?>admin/delete_product_type/<?php echo $values->id;?>" class="btn btn-danger">Delete</a></td>

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