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
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-top">
                                <div class="row mb-0">
                                    <!-- col -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                            <div><span style="font-size: 20px;">Total Members</span>
                                                <h3 class="font-medium mb-0"><?php echo $total_members; ?><h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                            <div><span style="font-size: 20px;">Total Customers</span>
                                                <h3 class="font-medium mb-0"><?php echo $total_customers; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                            <div><span style="font-size: 20px;">New Orders</span>
                                                <h3 class="font-medium mb-0"><?php echo $total_orders; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body border-top">
                                <div class="row mb-0">
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>
                                            <div><span style="font-size: 20px;">Company Profit</span>
                                                <h3 class="font-medium mb-0">RS <?php echo $company_profit[0]->c_profit; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-cyan display-5"><i class="mdi mdi-star-circle"></i></span></div>
                                            <div><span style="font-size: 20px;">Company Investment</span>
                                                <h3 class="font-medium mb-0">RS <?php echo $investment[0]->c_total_cost; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                            <div><span style="font-size: 20px;">Total P Cost</span>
                                                <h3 class="font-medium mb-0">RS <?php echo $total_cv[0]->total_cv; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="d-flex align-items-center">
                                            <div class="mr-2"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                            <div><span style="font-size: 20px;">Completed Orders</span>
                                                <h3 class="font-medium mb-0">RS <?php echo $completed_orders; ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Sales Summary</h4>
                                        <h5 class="card-subtitle">Overview of Latest Month</h5>
                                    </div>
                                    <div class="ml-auto d-flex no-block align-items-center">
                                        <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                            <li class="list-inline-item text-info"><i class="fa fa-circle"></i> Iphone
                                            </li>
                                            <li class="list-inline-item text-primary"><i class="fa fa-circle"></i> Ipad
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- column -->
                                    <div class="col-lg-12">
                                        <div class="campaign ct-charts"></div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Feeds</h4>
                                <div class="feed-widget">
                                    <ul class="list-style-none feed-body m-0 p-b-20">
                                        <a href="<?php echo base_url('admin/sold_products'); ?>">
                                        <li class="feed-item">
                                            <div class="feed-icon bg-danger"><i class="ti-user"></i></div> Out of Stock products.
                                         <!--    <span class="ml-auto font-12 text-muted">30 May</span> -->
                                        </li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Sales chart -->
                <!-- ============================================================== -->

                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Rank Overview</h4>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Rank Name</th>
                                            <th class="border-top-0">No of members</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Star</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">50</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Searlet Star</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">40</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Novel</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">30</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16">Novel Star</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Visit Report</h4>
                                    </div>
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">No of members in 25 min</th>
                                            <th style="width: 40%;" class="border-top-0">Total Withdrawals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h4 class="m-b-0 font-16">100</h4>
                                                    </div>
                                                </div>
                                            </td>   
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    <div>
                                                        <h4 class="m-b-0 font-16">200K</h4>
                                                    </div>
                                                </div>
                                            </td>  
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">No of members yesterday</th>
                                            <th style="width: 40%;" class="border-top-0">Total Withdrawals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h4 class="m-b-0 font-16">500</h4>
                                                    </div>
                                                </div>
                                            </td>   
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    <div>
                                                        <h4 class="m-b-0 font-16">400K</h4>
                                                    </div>
                                                </div>
                                            </td>  
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">No of members two days ago</th>
                                            <th style="width: 40%;" class="border-top-0">Total Withdrawals</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <h4 class="m-b-0 font-16">450</h4>
                                                    </div>
                                                </div>
                                            </td>   
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    
                                                    <div>
                                                        <h4 class="m-b-0 font-16">100K</h4>
                                                    </div>
                                                </div>
                                            </td>  
                                        </tr>
                                    </tbody>
                                </table>
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
                                        <h4 class="card-title">Sold Products </h4>
                                        <h5 class="card-subtitle">Overview of Sold Items</h5>
                                    </div>
                                  <!--   <div class="ml-auto">
                                        <div class="dl">
                                            <select class="custom-select">
                                                <option value="0" selected>Monthly</option>
                                                <option value="1">Daily</option>
                                                <option value="2">Weekly</option>
                                                <option value="3">Yearly</option>
                                            </select>
                                        </div>
                                    </div> -->
                                </div>
                                <!-- title -->
                            </div>
                            <div class="table-responsive">
                                <table class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">Products</th>
                                            <th class="border-top-0">Picture</th>
                                            <th class="border-top-0">Size</th>
                                            <th class="border-top-0">Color</th>
                                            <th class="border-top-0">Quantity</th>
                                            <th class="border-top-0">Sold</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($out_of_stock as $stock):?>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="m-r-10"><a
                                                            class="btn btn-circle d-flex btn-info text-white">EA</a>
                                                    </div>
                                                    <div class="">
                                                        <h4 class="m-b-0 font-16"><?php echo $stock->product_name; ?></h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><img src="<?php echo base_url('product_images/'.$stock->sub_image.''); ?>" style="width:50px; height: 50px;"></td>
                                            <td><?php echo $stock->size; ?></td>
                                            <td><?php echo $stock->color; ?></td>
                                            <td><?php echo $stock->qty; ?></td>
                                            <td><?php echo $stock->total_sold; ?></td>
                                            <td>
                                                <label class="label label-danger">Sold Out</label>
                                            </td>
                                            <td><a href="<?php echo base_url('admin/view_product/'.$stock->product_id.''); ?>">View</a></td>
                                           
                                        </tr>
                                    <?php endforeach; ?>
                                 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Recent comment and chats -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                   
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Recent Comments</h4>
                            </div>
                            <div class="comment-widgets scrollable">
                               
                                <div class="d-flex flex-row comment-row m-t-0">
                                    <div class="p-2"><img src="../assets/image/users/1.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span> <span
                                                class="label label-rounded label-primary">Pending</span> <span
                                                class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="../assets/image/users/4.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text active w-100">
                                        <h6 class="font-medium">Michael Jorden</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer ">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-success label-rounded">Approved</span>
                                            <span class="action-icons active">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                             
                                <div class="d-flex flex-row comment-row">
                                    <div class="p-2"><img src="../assets/image/users/5.jpg" alt="user" width="50"
                                            class="rounded-circle"></div>
                                    <div class="comment-text w-100">
                                        <h6 class="font-medium">Johnathan Doeting</h6>
                                        <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing
                                            and type setting industry. </span>
                                        <div class="comment-footer">
                                            <span class="text-muted float-right">April 14, 2016</span>
                                            <span class="label label-rounded label-danger">Rejected</span>
                                            <span class="action-icons">
                                                <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                <a href="javascript:void(0)"><i class="ti-heart"></i></a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div> -->
        
            </div>