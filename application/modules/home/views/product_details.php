    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Unstitched Fabrics</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->


          <?php if (!isMobileDevice()) { ?>
          <div class="sidebar col-md-3 col-sm-5">
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <?php foreach ($categories as $cat):
                  $first_seg = $this->uri->segment(3);
                  $second_seg = $this->uri->segment(4);

                  if($first_seg == '')
                  {
                    $tab_stat = '';
                    $sub_tab = '';
                  }
                  elseif ($first_seg != '' && $cat->id == $first_seg && $second_seg != '') {
                    $tab_stat = 'active';
                  }


                  
                ?>
              <li class="list-group-item clearfix dropdown <?php echo $tab_stat; ?>">
                <a href="<?php echo base_url('home/products/'.$cat->id.''); ?>" class="collapsed">
                  <i class="fa fa-angle-right"></i>
                  <?php echo $cat->category_name; ?>
                  
                </a>
                <ul class="dropdown-menu" style="display:block;">
                  <!-- <li class="list-group-item dropdown clearfix active">
                    <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Shoes </a>
                      <ul class="dropdown-menu" style="display:block;">
                        <li class="list-group-item dropdown clearfix">
                          <a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
                          <ul class="dropdown-menu">
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
                          </ul>
                        </li>
                        <li class="list-group-item dropdown clearfix active">
                          <a href="shop-product-list.html" class="collapsed"><i class="fa fa-angle-right"></i> Sport  </a>
                          <ul class="dropdown-menu" style="display:block;">
                            <li class="active"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
                            <li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li> -->

                  <?php $sub_category = get_query_data('SELECT * FROM tbl_sub_category where category_id = '.$cat->id.'');
                            foreach ($sub_category as $sub_cat):
                              $sec_seg = $this->uri->segment(4);
                              if($sub_cat->id == $sec_seg)
                                    {
                                        $sub_tab = 'active';
                                    }
                              ?>
                  <li class="<?php echo $sub_tab; ?>"><a href="<?php echo base_url('home/products/'.$cat->id.'/'.$sub_cat->id.''); ?>"><i class="fa fa-angle-right"></i> <?php echo $sub_cat->sub_category_name; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </li>
              <?php endforeach; ?>

            </ul>

            <div class="sidebar-products clearfix">

              <h2>Bestsellers</h2>
              <?php foreach ($rand_product_2 as $key => $value_1):
                                                    if(empty($value_1->customer_retail_price_new) || $value_1->customer_retail_price_new == 0)
                                                        {
                                                            $pr_price = $value_1->customer_retail_price;
                                                            $product_price_1 = '<span class="current_price">$'.$value_1->customer_retail_price.'.00</span>';
                                                        }
                                                        else{
                                                            $pr_price = $value_1->customer_retail_price_new;
                                                            $product_price_1 = '<span class="old_price">$'.$value_1->customer_retail_price.'.00</span> 
                                                                    <span class="current_price">$'.$value_1->customer_retail_price_new.'.00</span>';
                                                                    $sale_tag = '<div class="sticker sticker-new"></div>';
                                                        }

                                                        if(empty($value_1->sub_image))
                                                        {
                                                            $img_1 = 'frontfiles/assets/img/product/product6.jpg';
                                                        }
                                                        else{
                                                            $img_1 = 'product_images/'.$value_1->sub_image.'';
                                                        }
                                                        if($value_1->product_area == 'Latest'){
                                                            $latest_tag = '<div class="sticker sticker-new"></div>';
                                                        }
                                                    
                                                ?>

              <div class="item">
                <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>"><img src="<?php echo base_url($img_1); ?>" alt="<?php echo $value_1->product_name; ?>"></a>
                <h3><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>"><?php echo $value_1->product_name; ?></a></h3>
                <div class="price">Rs <?php echo $pr_price; ?></div>
              </div>
            <?php endforeach; ?>
            


            </div>
          </div>

        <?php } ?>







          <!-- END SIDEBAR -->
    <?php foreach ($product_detail as $detail) {
                     if(empty($detail->customer_retail_price_new) || $detail->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $detail->customer_retail_price;
                                        $product_price = $detail->customer_retail_price;
                                    }
                                    else{
                                        $pr_price = $detail->customer_retail_price_new;
                                        $product_price = $detail->customer_retail_price_new;
                                    }

                                    if(empty($detail->sub_image))
                                    {
                                        $img = 'frontfiles/assets/image/product/product8.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$detail->sub_image.'';
                                    }

                

                } ?>
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="<?php echo base_url($img); ?>" alt="<?php echo $detail->product_name; ?>" class="img-responsive" data-BigImgsrc="<?php echo base_url($img); ?>">
                  </div>
                  
                  <div class="product-other-images">
                    <?php 
                                $get_images = select_data('tbl_product_images', 'product_id='.$detail->product_id.'',$order='');

                            
                                foreach ($get_images as $imgs):
                                    $p_image = 'product_images/'.$imgs->image.'';
                             ?>
                    <a href="<?php echo base_url($p_image); ?>" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="<?php echo base_url($p_image); ?>"></a>
                    <?php endforeach; ?>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1><?php echo $detail->product_name; ?></h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><div id="size_price"><span>Rs</span> <?php echo $product_price; ?></div> </strong>
                      <!-- <em>$<span>62.00</span></em> -->
                    </div>
                    <div class="availability">
                      Availability: <div id="stock"></div>
                    </div>
                  </div>
                  <div class="description">
                    <p><?php echo $detail->description; ?></p>
                  </div>


                  <div class="product-page-options">

                    <?php if(!empty($sizes)){?>
                    <div class="pull-left">
                      
                      <label class="control-label">Size:</label>
                      <input type="hidden" name="product_id" id="product_id" value="<?php echo $detail->product_id; ?>">
                      <select class="form-control input-sm" name="size" id="size">
                        <option value="">Select Size</option>
                        <?php foreach ($sizes as $value) {?>
                          <option value="<?php echo $value->id.','.$value->size; ?>"><?php echo $value->size; ?></option>        
                        <?php } ?>
                      </select>
                    
                    </div>
                  
                    
                    <?php } ?>
                  </div>



                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product_quantity" name="product_quantity" type="text" value="1" class="form-control input-sm">
                    </div>
                    <?php    $p_id = $this->uri->segment(3);
                                    foreach ($cart_data as $cart) {
                                        $c_id = $cart['product_id'];
                                        $c_qty = $cart['qty'];

                                        if($p_id == $c_id){
                                            $now_id = $c_id;
                                            $now_qty = $c_qty;
                                        }

                                    } ?>

                            <input type="hidden" name="cart_product_id" id="cart_product_id" value="<?php echo $now_id; ?>" />
                            <input type="hidden" name="size_price" id="size_price1">
                            <input type="hidden" name="cart_qty" id="cart_qty" value="<?php if(empty($cart_data)){ echo '0';}else{ echo $c_qty; }   ?>" />
                    <button class="btn btn-primary add_to_cart" type="button" type="button"data-product_name="<?php echo $detail->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $detail->product_id; ?>" data-product_image="<?php echo $img; ?>" data-p_info_id = "<?php echo $this->uri->segment(4); ?>" title="Add to cart">Add to cart</button>
                  </div>
                  
                  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
                    <li><a class="evernote" data-original-title="evernote" href="javascript:;"></a></li>
                    <li><a class="tumblr" data-original-title="tumblr" href="javascript:;"></a></li>
                  </ul>
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li><a href="#Description" data-toggle="tab">Description</a></li>
                    <li><a href="#Information" data-toggle="tab">Information</a></li>
                    <li class="active"><a href="#Reviews" data-toggle="tab">Reviews (<?php echo $total_reviews; ?>)</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade show" id="Description">
                      <p><?php echo $detail->description; ?> </p>
                    </div>
                    <div class="tab-pane fade show" id="Information">
                      <table class="datasheet">
                        <tr>
                          <th colspan="2">Additional features</th>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 1</td>
                          <td>21 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 2</td>
                          <td>700 gr.</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 3</td>
                          <td>10 person</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 4</td>
                          <td>14 cm</td>
                        </tr>
                        <tr>
                          <td class="datasheet-features-type">Value 5</td>
                          <td>plastic</td>
                        </tr>
                      </table>
                    </div>
                    <div class="tab-pane fade show in active" id="Reviews">
                      
                      <?php 
                      if(empty($rating)){?>
                        <p>There are no reviews for this product.</p>
                      <?php } else{

                      
                      foreach ($rating as $review):?>


                      <div class="review-item clearfix">
                        <div class="review-item-submitted">
                          <strong><?php echo $review->customer_name; ?></strong>
                          <em><?php echo date('M, d Y', strtotime($review->created_at)); ?></em>
                          <div class="rateit" data-rateit-value="5" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
                        </div>                                              
                        <div class="review-item-content">
                            <p><?php echo $review->review; ?></p>
                        </div>
                        <div class="form-group">
                                
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
                      </div>
                      <?php endforeach; 
                    }
                      ?>
                      

                      <!-- BEGIN FORM-->
                      <form action="<?php echo base_url('home/product_details/'.$this->uri->segment(3).'/'.$this->uri->segment(4).''); ?>" method="post" enctype='multipart/form-data'>
                        <h2>Write a review</h2>
                        
                        <div class="form-group">
                          <label for="name">Name <span class="require">*</span></label>
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                          <label for="review">Review <span class="require">*</span></label>
                          <textarea class="form-control" rows="8" id="review" name="review" required></textarea>
                        </div>

                        <div class="form-group">
                                    <label for="name">Rating</label>
                                       
                                      <div class="rate">
                                            <input type="radio" id="star5" name="rating" value="5" />
                                            <label for="star5" title="text">5 stars</label>
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star4" title="text">4 stars</label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="text">3 stars</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="text">2 stars</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="text">1 star</label>
                                          </div>


                            </div>
                        
                        <div class="padding-top-20">                  
                          <!-- <button type="submit" class="btn btn-primary">Send</button> -->
                          <button type="submit" id="button-review" data-loading-text="Loading..." name="submit_review" value="Submit Review" class="btn btn-primary">Submit</button>
                        </div>
                      </form>
                      <!-- END FORM--> 
                    </div>
                  </div>
                </div>

                <div class="sticker sticker-sale"></div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Most popular products</h2>
            <div class="owl-carousel <?php echo $popular; ?>">

              <?php foreach ($rand_product_2 as $key => $value_1):
                                                    if(empty($value_1->customer_retail_price_new) || $value_1->customer_retail_price_new == 0)
                                                        {
                                                            $pr_price = $value_1->customer_retail_price;
                                                            $product_price_1 = '<span class="current_price">$'.$value_1->customer_retail_price.'.00</span>';
                                                        }
                                                        else{
                                                            $pr_price = $value_1->customer_retail_price_new;
                                                            $product_price_1 = '<span class="old_price">$'.$value_1->customer_retail_price.'.00</span> 
                                                                    <span class="current_price">$'.$value_1->customer_retail_price_new.'.00</span>';
                                                                    $sale_tag = '<div class="sticker sticker-new"></div>';
                                                        }

                                                        if(empty($value_1->sub_image))
                                                        {
                                                            $img_1 = 'frontfiles/assets/img/product/product6.jpg';
                                                        }
                                                        else{
                                                            $img_1 = 'product_images/'.$value_1->sub_image.'';
                                                        }
                                                        if($value_1->product_area == 'Latest'){
                                                            $latest_tag = '<div class="sticker sticker-new"></div>';
                                                        }
                                                    
                                                ?>

              <div>
                <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?php echo base_url($img_1); ?>" class="img-responsive" alt="<?php echo $value_1->product_name; ?>">
                    <div>
                      <!-- <a href="assets/pages/img/products/k1.jpg" class="btn btn-default fancybox-button">Zoom</a> -->
                      <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                    </div>
                  </div>
                  <h3><a href="shop-item.html"><?php echo $value_1->product_name; ?></a></h3>
                  <div class="pi-price">Rs <?php echo $pr_price; ?></div>
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>

                </div>
                </a>
              </div>
              <?php endforeach; ?>

  

 
        
     
            </div>
          </div>
        </div>
        <!-- END SIMILAR PRODUCTS -->
      </div>
    </div>
