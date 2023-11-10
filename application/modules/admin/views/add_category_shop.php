
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
                          
                		  <form action="<?php echo base_url();?>admin/add_category_shop/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">
                			 <div class="form-group">
					                <label>Category Name</label>
					             <input type="hidden" name="shop_id" value="<?php echo $this->uri->segment(3);?>">
                          		<select name="category_id" class="form-control">
                          			<option>Please Select One</option>
                          			<?php foreach ($category_data as $value):?>
                          			<option value="<?php echo $value->id;?>"><?php echo $value->category_name;?></option>
                          			<?php endforeach; ?>

                          		</select>
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
                 <table id="shop_category_table" class="table table-bordered table-striped">
                 	<input type="hidden" name="add_shop_id" id="add_shop_id" value="<?php echo $this->uri->segment(3);?>">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Shop</th>
                    <th>Category</th>
                    <th>Picture</th>
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