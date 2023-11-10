
<style type="text/css">
    *{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > .inpt {
    position:fixed;
    top:-9999px;
}
.rate:not(:checked) > .str {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > .str:before {
    content: '★ ';
}
.rate > .inpt:checked ~ .str {
    color: #ffc700;    
}
.rate:not(:checked) > .str:hover,
.rate:not(:checked) > .str:hover ~ .str {
    color: #deb217;  
}
.rate > .inpt:checked + .str:hover,
.rate > .inpt:checked + .str:hover ~ .str,
.rate > .inpt:checked ~ .str:hover,
.rate > .inpt:checked ~ .str:hover ~ .str,
.rate > .str:hover ~ .inpt:checked ~ .str {
    color: #c59b08;
}

/* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
  </style>


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





                <div class="row">

                    <div class="col-lg-12">

                        <div class="card">

                            <div class="card-body border-top">

                                <div class="row mb-0">

                                    <!-- col -->

                                    <div class="col-lg-4 col-md-6">

                                        <div class="d-flex align-items-center">

                                            <div class="mr-2"><span class="text-orange display-5"><i class="mdi mdi-wallet"></i></span></div>

                                            <div><span style="font-size: 20px;">Total Reviews</span>

                                                <h3 class="font-medium mb-0"><?php echo $total_reviews; ?></h3>

                                            </div>

                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>

                    </div>

                </div>

         <div class="content mt-3">

            <div class="animated fadeIn">

            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Recent Comments</h4>
                        <h6 class="card-subtitle">Latest Comments section by users</h6>
                    </div>
                    <div class="comment-widgets m-b-20">



                    	<?php foreach ($rating as $review):?>
                        <div class="d-flex flex-row comment-row">

                            

                            <div class="comment-text w-100">
                                <h5><?php echo $review->customer_name; ?></h5>
                                <h6><?php echo $review->customer_type; ?></h6>

                                <div class="form-group required">
                                
                                       <div class="rate">
                                        <input type="radio" <?php if($review->rating == '5'){ echo 'checked="checked"';} ?> class="inpt" id="star5" name="rating_<?php echo $review->id; ?>" value="5" />
                                        <label for="star5" title="text" class="str">5 stars</label>
                                        <input type="radio" <?php if($review->rating == '4'){ echo 'checked="checked"';} ?> class="inpt" id="star4" name="rating_<?php echo $review->id; ?>" value="4" />
                                        <label for="star4" title="text" class="str">4 stars</label>
                                        <input type="radio" <?php if($review->rating == '3'){ echo 'checked="checked"';} ?> class="inpt" id="star3" name="rating_<?php echo $review->id; ?>" value="3" />
                                        <label for="star3" title="text" class="str">3 stars</label>
                                        <input type="radio" <?php if($review->rating == '2'){ echo 'checked="checked"';} ?> class="inpt" id="star2" name="rating_<?php echo $review->id; ?>" value="2" />
                                        <label for="star2" title="text" class="str">2 stars</label>
                                        <input type="radio" <?php if($review->rating == '1'){ echo 'checked="checked"';} ?> class="inpt" id="star1" name="rating_<?php echo $review->id; ?>" value="1" />
                                        <label for="star1" title="text" class="str">1 star</label>
                                      </div>


                               
                            </div>
                            <!-- <button class="btn btn-danger" style="float: right;">Delete Review</button> -->
                                <div class="comment-footer"> <span class="date">	<?php echo date('M, d Y', strtotime($review->created_at)); ?></span>  <span class="action-icons"> <a href="<?php echo base_url('admin/delete_review/'.$review->product_id.'/'.$review->id.''); ?>" data-abc="true"><i class="fa fa-trash"></i></a> </span> </div>
                                <p class="m-b-5 m-t-10"><?php echo $review->review; ?></p>
                                <?php $get_images = get_query_data('SELECT review_images, review_id FROM tbl_review_images where review_id = '.$review->id.'');
                                        foreach ($get_images as $imgs) {?>
                                           <a href="<?php echo base_url('rating_images/'.$imgs->review_images.''); ?>"><img src="<?php echo base_url('rating_images/'.$imgs->review_images.''); ?>" style="width: 100px; height: 100px;"></a> 
                                        <?php }
                                 ?>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                       
                       
                        
                    
                    </div>
                </div>
            </div>
        </div>

            </div><!-- .animated -->

        </div><!-- .content -->







        

            </div>

