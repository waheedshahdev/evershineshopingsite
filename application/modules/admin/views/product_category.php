





















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
                          <?php foreach ($category_data as $value) {
                            # code...
                          } ?>
                      <form action="<?php echo base_url();?>admin/product_category/<?php echo $value->id;?>" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                          <label>Category Name</label>
                          <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Enter Category Name" value="<?php echo $value->category_name;?>">
                      </div> 
                      <!-- <div class="form-group">
                          <label>Sub Category Name</label>
                          <input type="text" class="form-control" name="sub_category_name" id="sub_category_name" placeholder="Enter Category Name" value="<?php echo $value->sub_category_name;?>">
                      </div> --> 
                      <div class="form-group">
                          <label>Category Image</label>
                          <input type="file" class="form-control" name="category_image" id="category_image" value="<?php echo $value->category_image;?>">
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
                                        <h4 class="card-title">Product Categories</h4>
                                    </div>
                                   
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table id="category_table" class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                        <th>id</th>
                                        <th>Category Name</th>
                                        <th>Picture</th>
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