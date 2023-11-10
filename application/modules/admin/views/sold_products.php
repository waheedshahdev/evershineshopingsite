


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

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                <div class="d-md-flex align-items-center">
                                    <div>
                                        <h4 class="card-title">Members</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="dl">
                                        </div>
                                    </div>
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

        
            </div>