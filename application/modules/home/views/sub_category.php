 


    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Sub Categories</li>
        </ul>


                <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
         
            <div class="owl-carousel <?php echo $carousal; ?>">
              <?php foreach ($sub_categories as $sub_Category):
                                 if(empty($sub_Category->sub_category_image))
                                    {
                                        $img = 'new_adminfiles/assets/image/product/6product50x59.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$sub_Category->sub_category_image.'';
                                    }
                                                    
                                                ?>
              <div>
                <div class="product-item">
                   <a href="<?php echo base_url(); ?>home/products/<?php echo $sub_Category->category_id; ?>/<?php echo $sub_Category->id; ?>">
                  <div class="pi-img-wrapper">
                   <img src="<?php echo base_url($img);?>" class="img-responsive" alt="<?php echo $sub_Category->sub_category_name; ?>" style="border-radius: 20px !important;">
                    <div>
                    </div>
                  </div>
                  </a>
                  <h3><a href="<?php echo base_url(); ?>home/products/<?php echo $sub_Category->category_id; ?>/<?php echo $sub_Category->id; ?>"><?php echo $sub_Category->sub_category_name; ?></a></h3>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->








                <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2 style="font-size:40px">Related Products</h2>
      
             
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

              
              
              <div class="col-md-3">
                <div class="product-item">
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>">
                  <div class="pi-img-wrapper">
                    <img src="<?php echo base_url($img_1); ?>" class="img-responsive" alt="<?php echo $value_1->product_name; ?>" style="border-radius: 20px !important;">
                    <div>
                      <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                    </div>
                  </div>
                  </a>
                  <h3><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>"><?php echo $value_1->product_name; ?></a></h3>
                  <div class="pi-price">PKR <?php echo $pr_price; ?></div>
                  <!-- <a href="javascript:;" class="btn btn-default add2cart add_to_cart" data-product_name="<?php //echo $value_1->product_name; ?>" data-product_price="<?php //echo $pr_price; ?>" data-product_id="<?php //echo $value_1->product_id; ?>" data-product_image="<?php //echo $img_1; ?>">Add to cart</a> -->
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>
                  <?php echo $latest_tag;
                        echo $sale_tag; ?>
                </div>
              </div>
            <?php endforeach; ?>

              
       
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->





      </div>
    </div>