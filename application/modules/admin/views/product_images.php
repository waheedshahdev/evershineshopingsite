
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
                          <?php foreach ($category_data as $value) {
                            # code...
                          } ?>
                		  <form action="<?php echo base_url();?>admin/add_product_images/<?php echo $this->uri->segment(3); ?>" method="post" enctype="multipart/form-data">
                				<input type="hidden" name="product_id" value="<?php echo $this->uri->segment(3); ?>">
					            <div class="form-group">
                          			<label>Choose Multiple Images</label>
                          			<input type="file" name="userfile[]" class="form-control" id="userfile" placeholder="Enter Product Images" required="" multiple="multiple">
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
                            <strong class="card-title">Products Images</strong>
                        </div>
                        <div class="card-body">
                 <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Images</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	<?php
                	$count = 0;
                	foreach ($product_images as $image):
                		$count++;
                		?>
                	<tr>
                		<td><?php echo $count; ?></td>
                		<td><img src="<?php echo base_url(); ?>product_images/<?php echo $image->image; ?>" style="width: 50px; height: 50px;"></td>
                		<td><?php echo $image->created_at; ?></td>
                		<td><button class="btn btn-danger delete_image" id="<?php echo $image->id; ?>" name="submit" type="button">Delete</button></td>
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