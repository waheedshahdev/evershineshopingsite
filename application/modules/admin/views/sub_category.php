




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
                            <strong class="card-title">Product Category</strong>
                        </div>
                        <div class="card-body">
                          <?php foreach ($sub_category_data as $value) {
                            # code...
                          } ?>
                      <form action="<?php echo base_url();?>admin/sub_category/<?php echo $this->uri->segment(3);?>" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <label>Sub Category Name</label>
                          <input type="text" class="form-control" name="sub_category_name" id="sub_category_name" placeholder="Enter Category Name" value="<?php echo $value->sub_category_name;?>">
                      </div> 
                      <div class="form-group">
                          <label>Select Category</label>
                          <select name="category_id" class="form-control">
                            <?php if(isset($value->sub_cat)){
                                 echo '<option value="'.$value->category_id.'">'.$value->category_name.'</option>';
                               } ?>
                            <option>----</option>
                            <?php foreach ($category as $value):?>
                              <option value="<?php echo $value->id;?>"><?php echo $value->category_name;?></option>
                            <?php endforeach;?>
                          </select>
                      </div> 

                      <div class="form-group">
                          <label>Sub Category Image</label>
                          <input type="file" class="form-control" name="sub_category_image" id="sub_category_image" value="<?php echo $value->sub_category_image;?>">
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
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Product Sub Categories</h4>
                                    </div>
                                   
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table id="sub_category_table" class="table table-bordered table-striped">
                                <input type="hidden" name="category_id" id="category_id" value="<?php echo $value->id;?>">
                                    <thead>
                                        <th>id</th>
                                        <th>Sub Category Name</th>
                                        <th>Category Name</th>
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

        
            </div>