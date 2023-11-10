




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
                            <strong class="card-title">Product Stock</strong>
                        </div>
                        <div class="card-body">
                          
                      <form action="<?php echo base_url();?>admin/edit_stock/<?php echo $this->uri->segment(3);?>/<?php echo $this->uri->segment(4); ?>" method="post" enctype="multipart/form-data">
                       <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Size</label>
                            <input type="text" name="size" placeholder="Enter Product Size" class="form-control" id="recipient-name1" value="<?php echo $sizes[0]->size; ?>" required>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Color</label>
                            <input type="text" name="color" placeholder="Product Color" value="<?php echo $sizes[0]->color; ?>" class="form-control" id="recipient-name1">
                        </div>
                    </div>
                     <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Price</label>
                            <input type="text" name="size_price" placeholder="Product Price" value="<?php echo $sizes[0]->size_price; ?>" class="form-control" id="recipient-name1" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="recipient-name" class="control-label">Quantity</label>
                            <input type="number" name="quantity" placeholder="Enter Quantity" value="<?php echo $sizes[0]->quantity; ?>" class="form-control" id="recipient-name1">
                        </div>
                    </div>
                    <input type="submit" style="float: right;" name="submit" id="submit" value="Update Stock" class="btn btn-success">

                    </form>
                        </div>
                    </div>
                </div>


                </div>


                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
      

        
            </div>