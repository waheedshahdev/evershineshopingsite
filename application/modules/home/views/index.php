
      
          <div class="page-slider">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
     
            <div class="hero featured-carousel owl-carousel">
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('frontfiles/carousel');?>/images/<?php echo $slider1; ?>);">
                    
                  </div> 
                </div>
              </div>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('frontfiles/carousel');?>/images/<?php echo $slider2; ?>);">

                  </div>
                </div>
              </div>
              <div class="item">
                <div class="work">
                  <div class="img d-flex align-items-center justify-content-center" style="background-image: url(<?php echo base_url('frontfiles/carousel');?>/images/<?php echo $slider3; ?>);">

                  </div>
                </div>
            
            </div>
           
          </div>
          </div>
          </div>
   
    
    <!-- END SLIDER -->

<div class="container-fluid">
    <div class="row">
  <!-- <div class="col-md-4 col-sm-4">
    ___________________________
</div> -->
<div class="col-md-12"><h2 style="margin-bottom: 20px; font-size: 35px;"><t style="font-family: fangsong;">CATEGORIES</t> </h2></div>
<!-- <div class="col-md-4">___________________________ </div> -->
  </div>
  
</div>
    <div class="container">
    
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            

              <?php foreach ($categories as $category):?>
                <a href="<?php echo base_url('home/subCategory/'.$category->id.''); ?>">
              <div class="col-md-3">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?php echo base_url(); ?>product_images/<?php echo $category->category_image;  ?>" class="img-responsive" style="border-radius: 20px !important;">
                    
                  </div>
                 
                </div>
              </div>
            </a>


      
            
            <?php endforeach; ?>
              
            
          </div>
    
      
        </div>
   
        <!-- END SALE PRODUCT & NEW ARRIVALS -->
    </div>
        <!-- BEGIN STEPS -->





    <!-- END STEPS -->
    <div class="main">


      <div class="steps-block steps-block-red">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 steps-block-col">
            
            <div>
              <h2 style="font-family: fangsong; text-align: center;">Festival Collection</h2>
              
            </div>
          </div>
        
        </div>
      </div>
    </div>


      <div class="container">
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2 style="font-size:40px">New Arrivals</h2>
         
            <div class="owl-carousel <?php echo $carousal; ?>">
              <?php foreach ($latest as $key => $value_1):
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
                <div class="product-item">
                   <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>">
                  <div class="pi-img-wrapper">
                   <img src="<?php echo base_url($img_1); ?>" class="img-responsive" alt="<?php echo $value_1->product_name; ?>" style="border-radius: 20px !important;">
                    <div>
                      <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view home_modal" id="<?php //echo $value_1->product_id; ?>">View</a> -->

                    </div>
                  </div>
                  </a>
                  <h3><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>"><?php echo $value_1->product_name; ?></a></h3>
                  <div class="pi-price">PKR <?php echo $pr_price; ?></div>
                  <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                  <!-- <a type="button" class="btn btn-default add2cart add_to_cart" data-product_name="<?php// echo $value_1->product_name; ?>" data-product_price="<?php //echo $pr_price; ?>" data-product_id="<?php// echo $value_1->product_id; ?>" data-product_image="<?php //echo $img_1; ?>" >Add to cart</a> -->
                  <!-- <div class="sticker sticker-sale"></div> -->
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>
                  <?php echo $latest_tag;
                        echo $sale_tag; ?>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
         <h2><a href="<?php echo base_url('home/products'); ?>" class="btn btn-primary" style="border-radius: 20px !important; font-size: 20px; margin-bottom: 6px;">Shop Now</a></h2>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->





        <!-- BEGIN SALE PRODUCT & BESTSELLER -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2 style="font-size:40px">BEST SELLER </h2>
               <div class="owl-carousel <?php echo $bestsellcarousal; ?>">
              
              <?php foreach ($latest as $key => $value_1):
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
                  <!-- <a type="button" class="btn btn-default add2cart add_to_cart" data-product_name="<?php// echo $value_1->product_name; ?>" data-product_price="<?php// echo $pr_price; ?>" data-product_id="<?php //echo $value_1->product_id; ?>" data-product_image="<?php //echo $img_1; ?>" >Add to cart</a> -->
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>/<?php echo $value_1->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>
                  <!-- <div class="sticker sticker-sale"></div> -->
                  <?php echo $latest_tag;
                        echo $sale_tag; ?>
                </div>
              </div>
              <?php endforeach; ?>

              
            
            </div>
          <h2><a href="<?php echo base_url('home/products'); ?>" class="btn btn-primary" style="border-radius: 20px !important; font-size: 20px; margin-bottom: 6px;">Shop Now</a></h2>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & BESTSELLER -->





        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2 style="font-size:40px">Products</h2>
      
             
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