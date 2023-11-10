





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


                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Customer Orders</h4>
                                    </div>
                                   
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table id="order_table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Tracking</th>
									<th>Customer Name</th>
                  <th>Type</th>
									<!-- <th>Sub Total</th> -->
									<th>Promo Discount</th>
									<th>Grand Total</th>
									<th>payment</th>
									<th>Order Status</th>
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
            </div>



            </div>
