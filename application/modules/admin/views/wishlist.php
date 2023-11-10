


            <div class="container-fluid">
              <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-12">
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
                    <div class="col-12">
                        <div class="text-right upgrade-btn">
                            
                        </div>
                    </div>
                </div>
            </div>
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
            <div class="content mt-3">
              <div class="animated fadeIn">
                <div class="row ">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <!-- title -->
                                
                                <div class="d-md-flex align-items-center">

                                    <div>
                                        <h4 class="card-title">Ranking</h4>
                                    

                                    </div>

                                   
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped adminlist">
							<thead>

								<tr>
									<th class="text-center">#</th>
									<th>Product ID</th>
									<th>Product Image</th>
									<th>Product Name</th>
									<th>Status</th>
									<th>From</th>
                  <th>Created</th>
                  <th>Action</th>
									
								</tr>
							</thead>
							<tbody>
								<?php $count = 1; foreach ($wishlist as $wish):
									if($wish->status == 1){
										$status = 'In Wishlist';

									}
									else{
										$status = 'In Stock';
									}
								?>
								<tr>

									<td class="text-center"><?php echo $count++; ?></td>
									<td class="text-center"><?php echo $wish->product_id; ?></td>
									<td class="text-center"><img src="<?php echo base_url('product_images/'.$wish->sub_image.''); ?>" style="width: 50px; height: 50px;"></td>
									<td><?php echo $wish->product_name; ?></td>
									<td><?php echo $wish->list_from; ?></td>
									<td><?php echo $wish->status; ?></td>
									<td><?php echo $wish->created_at; ?></td>
                  <td><select class="btn btn-danger dropdown-toggle" id="wishlist_status" data-wish_id='<?php echo $wish->id; ?>'>
                            <option value="">Change Status</option>
                            <option value="In Wishlist">In Wishlist</option>
                            <option value="Confirmed">Confirmed</option>
                            <option value="In Stock">In Stock</option>
                      </select>
                  </td>
                  
								</tr>
							<?php endforeach; ?>
							</tbody>

						</table>
                            </div>



                        </div>
                    </div>
                </div>






        
            </div>
            </div>

          </div>
        </div>