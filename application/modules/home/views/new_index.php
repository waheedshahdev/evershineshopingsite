   

    <!--slider area start-->
    <section class="slider_section slider_s_two mb-50">
      
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
        <div class="slider_area owl-carousel">
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo base_url(); ?>frontfiles/assets/img/slider/slider2.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1> Pendant <br> Collection 2019</h1>
                               <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p>
                                <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo base_url(); ?>frontfiles/assets/img/slider/slider4.jpg">
               <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>The New iPad  <br> Entry Level 9.7-inch </h1>
                                <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p> 
                                <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>   
            </div>
            <div class="single_slider d-flex align-items-center" data-bgimg="<?php echo base_url(); ?>frontfiles/assets/img/slider/slider5.jpg">
                <div class="container">
                   <div class="row">
                       <div class="col-12">
                           <div class="slider_content">
                                <h1>Fast Charge   <br> Collection 2019 </h1>
                                <p>consectetur adipisicing elit. Itaque dolorem, aliquam quos. Molestias dolorum explicabo totam illum itaque sit </p>
                                 <a class="button" href="shop.html">SHOPPING NOW</a>
                            </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </section>

    <!--slider area end-->














    
    <!--banner area start-->
    <div class="banner_area mb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">

                            <!-- Old image of the banner is banner6.jpg size 568x200 -->
                            <a href="<?php echo base_url(); ?>home/products"><img src="<?php echo base_url(); ?>frontfiles/assets/img/bg/shopping.png" alt=""></a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-6 col-md-6">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <!-- old image of the banner is banner7.jpg  size 568x200 -->
                            <a href="<?php echo base_url(); ?>home/products"><img src="<?php echo base_url(); ?>frontfiles/assets/img/bg/shopping1.jpg" alt=""></a>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!--banner area end-->
    
    <!--product area start-->
    <div class="product_area product_style2 mb-15">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Featured Products</h2>

                        </div>
                      <!--   <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Video" role="tab" aria-controls="Video" aria-selected="true"> 
                                         Games
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Watches" role="tab" aria-controls="Watches" aria-selected="false">
                                        Watches
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Tablet" role="tab" aria-controls="Tablet" aria-selected="false">
                                        Tablet
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Game" role="tab" aria-controls="Game" aria-selected="false">
                                        Game
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Video" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                            
                            <?php foreach ($rand_products as $products):
                                    if(empty($products->customer_retail_price_new) || $products->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $products->customer_retail_price;
                                        $product_price = '<span class="current_price">$'.$products->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->customer_retail_price_new;
                                        $product_price = '<span class="old_price">$'.$products->customer_retail_price.'.00</span> 
                                                <span class="current_price">$'.$products->customer_retail_price_new.'.00</span>';
                                    }

                                  


                                    if(empty($products->sub_image))
                                    {
                                        $img = 'frontfiles/assets/img/product/product6.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$products->sub_image.'';
                                    }

                                ?>
                             <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>"><?php echo $products->product_name; ?></a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>"><img src="<?php echo base_url($img); ?>" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" id="<?php echo $products->id; ?>" data-target="#modal_box" class="home_modal"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <?php echo $product_price; ?>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                                                    <li class="add_to_cart"><a class="button add_to_cart" type="button"data-product_name="<?php echo $products->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $products->product_id; ?>" data-product_image="<?php echo $img; ?>" title="Add to cart">Add to cart</a></li>


                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                        <?php endforeach; ?>
                           
                             

                        </div> 
                    </div>   
                </div>
                <!-- ////////////////////////////////////////////////
                |   Game Watch Table Code is here if Required in future
                |\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->


            </div> 
              
        </div>
    </div>
    <!--product area end-->
    
    <!--product area start-->
    <div class="product_area product_bg mb-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Products</h2>
                           <!-- <h2>Smartphone & Tablet</h2> -->

                        </div>
                        <!-- <div class="product_tab_btn">
                            <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Toys2" role="tab" aria-controls="Toys2" aria-selected="true"> 
                                        Toys
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Watches2" role="tab" aria-controls="Watches2" aria-selected="false">
                                        Watches
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Game2" role="tab" aria-controls="Game2" aria-selected="false">
                                        Game
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Tablet2" role="tab" aria-controls="Tablet2" aria-selected="false">
                                        Tablet
                                    </a>
                                </li>
                                
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Toys2" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column2 owl-carousel">
                            
                            <?php foreach ($rand_products as $products){
                                    if(empty($products->customer_retail_price_new) || $products->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $products->customer_retail_price;   
                                        $product_price = '<span class="current_price">$'.$products->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->customer_retail_price_new;
                                        $product_price = '<span class="old_price">$'.$products->customer_retail_price.'.00</span> 
                                                <span class="current_price">$'.$products->customer_retail_price_new.'.00</span>';
                                    }

                                    if(empty($products->sub_image))
                                    {
                                        $img = 'frontfiles/assets/img/product/product6.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$products->sub_image.'';
                                    }
                                }
                                ?>

                            <div class="col-lg-12">
                                <div class="product_items">
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <?php foreach ($rand_product_1 as $key => $value_1):
                                                    if(empty($value_1->customer_retail_price_new) || $value_1->customer_retail_price_new == 0)
                                                        {
                                                            $pr_price = $value_1->customer_retail_price;
                                                            $product_price_1 = '<span class="current_price">$'.$value_1->customer_retail_price.'.00</span>';
                                                        }
                                                        else{
                                                            $pr_price = $value_1->customer_retail_price_new;
                                                            $product_price_1 = '<span class="old_price">$'.$value_1->customer_retail_price.'.00</span> 
                                                                    <span class="current_price">$'.$value_1->customer_retail_price_new.'.00</span>';
                                                        }

                                                        if(empty($value_1->sub_image))
                                                        {
                                                            $img_1 = 'frontfiles/assets/img/product/product6.jpg';
                                                        }
                                                        else{
                                                            $img_1 = 'product_images/'.$value_1->sub_image.'';
                                                        }
                                                    
                                                ?>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>"><?php echo $value_1->product_name; ?></a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="<?php echo base_url(); ?>home/product_details/<?php echo $value_1->product_id; ?>"><img src="<?php echo base_url($img_1); ?>" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" id="<?php echo $value_1->product_id; ?>" class="home_modal"  data-target="#modal_box"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <?php echo $product_price_1; ?>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                    <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                                                                     <li class="add_to_cart"><a class="button add_to_cart" type="button" data-product_name="<?php echo $value_1->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $value_1->product_id; ?>" data-product_image="<?php echo $img_1; ?>" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div> 
                                    <?php foreach ($rand_product_2 as $key => $value_2) {
                                       if(empty($value_2->customer_retail_price_new) || $value_2->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $value_2->customer_retail_price;
                                        $product_price_2 = '<span class="current_price">$'.$value_2->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $value_2->customer_retail_price_new;
                                        $product_price_2 = '<span class="old_price">$'.$value_2->customer_retail_price.'.00</span> 
                                                <span class="current_price">$'.$value_2->customer_retail_price_new.'.00</span>';
                                    }

                                    if(empty($value_2->sub_image))
                                    {
                                        $img_2 = 'frontfiles/assets/img/product/product6.jpg';
                                    }
                                    else{
                                        $img_2 = 'product_images/'.$value_2->sub_image.'';
                                    }
                                
                                    } ?>
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="<?php echo base_url(); ?>home/product_details/<?php echo $value_2->product_id; ?>"><img src="<?php echo base_url($img_2); ?>" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" id="<?php echo $value_2->product_id; ?>"  data-target="#modal_box" class="home_modal"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_2->product_id; ?>"><?php echo $value_2->product_name; ?></a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <?php echo $product_price_2; ?>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                        <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                                                                     <li class="add_to_cart"><a class="button add_to_cart" type="button" data-product_name="<?php echo $value_2->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $value_2->product_id; ?>" data-product_image="<?php echo $img_2; ?>" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="product_items">
                                    <?php foreach ($rand_product_4 as $key => $value_4) {
                                        if(empty($value_4->customer_retail_price_new) || $value_4->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $value_4->customer_retail_price;
                                        $product_price_4 = '<span class="current_price">$'.$value_4->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $value_4->customer_retail_price_new;
                                        $product_price_4 = '<span class="old_price">$'.$value_4->customer_retail_price.'.00</span> 
                                                <span class="current_price">$'.$value_4->customer_retail_price_new.'.00</span>';
                                    }

                                    if(empty($value_4->sub_image))
                                    {
                                        $img_4 = 'frontfiles/assets/img/product/product6.jpg';
                                    }
                                    else{
                                        $img_4 = 'product_images/'.$value_4->sub_image.'';
                                    }
                                
                                    } ?>
                                    <article class="single_product product_design2">
                                        <figure>
                                            <div class="product_thumb">
                                                <a class="primary_img" href="<?php echo base_url(); ?>home/product_details/<?php echo $value_4->product_id; ?>"><img src="<?php echo base_url($img_4); ?>" alt=""></a>
                                                <div class="label_product">
                                                    <span class="label_sale">Sale!</span>
                                                </div>
                                                <div class="quick_button">
                                                    <a href="#" data-toggle="modal" id="<?php echo $value_4->product_id; ?>" data-target="#modal_box" class="home_modal"  title="quick view"> Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <div class="product_name">
                                                   <h4><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_4->product_id; ?>"><?php echo $value_4->product_name; ?></a></h4>
                                               </div>
                                               <div class="product_rating">
                                                   <ul>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                   </ul>
                                               </div>
                                                <div class="price_box"> 
                                                    <?php echo $product_price_4; ?>
                                                </div>
                                                <div class="action_links">
                                                     <ul>
                                                       <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                                                                     <li class="add_to_cart"><a class="button add_to_cart" type="button" data-product_name="<?php echo $value_4->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $value_4->product_id; ?>" data-product_image="<?php echo $img_4; ?>" title="Add to cart">Add to cart</a></li>

                                                        <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                        <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                           
                                        </figure>
                                    </article>
                                    <div class="product_items_inner2">
                                        <div class="row">
                                            <?php foreach ($rand_product_3 as $key => $value_3):
                                                if(empty($value_3->customer_retail_price_new) || $value_3->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $value_3->customer_retail_price;
                                        $product_price_3 = '<span class="current_price">$'.$value_3->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $value_3->customer_retail_price_new;
                                        $product_price_3 = '<span class="old_price">$'.$value_3->customer_retail_price.'.00</span> 
                                                <span class="current_price">$'.$value_3->customer_retail_price_new.'.00</span>';
                                    }

                                    if(empty($value_3->sub_image))
                                    {
                                        $img_3 = 'frontfiles/assets/img/product/product6.jpg';
                                    }
                                    else{
                                        $img_3 = 'product_images/'.$value_3->sub_image.'';
                                    }
                                

                                                ?>
                                            <div class="col-lg-6 col-md-6">
                                                <article class="single_product">
                                                    <figure>
                                                       <div class="product_name">
                                                           <h4><a href="<?php echo base_url(); ?>home/product_details/<?php echo $value_3->id; ?>"><?php echo $value_3->product_name; ?></a></h4>
                                                       </div>
                                                       <div class="product_rating">
                                                           <ul>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           </ul>
                                                       </div>

                                                        <div class="product_thumb">
                                                            <a class="primary_img" href="<?php echo base_url(); ?>home/product_details/<?php echo $value_3->id; ?>"><img src="<?php echo base_url($img_3); ?>" alt=""></a>
                                                            <div class="label_product">
                                                                <span class="label_sale">Sale!</span>
                                                            </div>
                                                            <div class="quick_button">
                                                                <a href="#" data-toggle="modal" id="<?php echo $value_3->id; ?>" data-target="#modal_box" class="home_modal"  title="quick view"> Quick View</a>
                                                            </div>
                                                        </div>
                                                        <div class="product_footer">
                                                            <div class="price_box"> 
                                                                <?php echo $product_price_3; ?>
                                                            </div>
                                                            <div class="action_links">
                                                                 <ul>
                                                                   <input type="hidden" name="product_quantity" id="product_quantity" value="1">
                                                                     <li class="add_to_cart"><a class="button add_to_cart" type="button" data-product_name="<?php echo $value_3->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $value_3->product_id; ?>" data-product_image="<?php echo $img_3; ?>" title="Add to cart">Add to cart</a></li>

                                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </figure>
                                                </article>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div> 
                    </div>   
                </div>
                
                <!-- ////////////////////////////////////////////////
                |   Game Watch Table Code is here if Required in future
                |\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
            </div> 
              
        </div>
    </div>
    <!--product area end-->
    






    
    <!--product area start-->
    <div class="product_area product_style2 mb-10">
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="product_header">
                        <div class="section_title">
                           <h2>Bestseller Products</h2>
                        </div>
                        <div class="product_tab_btn">
                            <!-- <ul class="nav" role="tablist">
                                <li>
                                    <a class="active" data-toggle="tab" href="#Tablet3" role="tab" aria-controls="Tablet3" aria-selected="false">
                                        Tablet
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Game3" role="tab" aria-controls="Game3" aria-selected="false">
                                        Game
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tabs2" role="tab" aria-controls="tabs2" aria-selected="true"> 
                                        Video
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#Watches3" role="tab" aria-controls="Watches3" aria-selected="false">
                                        Watches
                                    </a>
                                </li>
                                
                            </ul> -->
                        </div>
                    </div>
                </div>
            </div> 
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Tablet3" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style product_column4 owl-carousel">
                            <div class="col-lg-3">
                                <article class="single_product">
                                    <figure>
                                       <div class="product_name">
                                           <h4><a href="product-details.html">Consequuntur magni risus tincidunt convallis scelerisque</a></h4>
                                       </div>
                                       <div class="product_rating">
                                           <ul>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                               <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                           </ul>
                                       </div>

                                        <div class="product_thumb">
                                            <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product6.jpg" alt=""></a>
                                            <div class="label_product">
                                                <span class="label_sale">Sale!</span>
                                            </div>
                                            <div class="quick_button">
                                                <a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product_footer">
                                            <div class="price_box"> 
                                                <span class="old_price">$56.00</span> 
                                                <span class="current_price">$52.00</span>
                                            </div>
                                            <div class="action_links">
                                                 <ul>
                                                    <li class="add_to_cart"><a href="cart.html" title="Add to cart">Add to cart</a></li>

                                                    <li class="wishlist"><a href="wishlist.html"  title="Add to Wishlist"><i class="ion-android-favorite-outline"></i></a></li>

                                                    <li class="compare"><a href="#" title="Add to Compare"><i class="ion-shuffle"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </figure>
                                </article>   
                            </div>
                             
                             
                        </div> 
                    </div>   
                </div>
                
                <!-- ////////////////////////////////////////////////
                |   Game Watch Table Code is here if Required in future
                |\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

            </div> 
        </div>
    </div>
    <!--product area end-->
    
    <!--Categories product area start-->
    <div class="categories_product_area mb-50">
        <div class="container">
           <div class="row">
               <div class="col-12">
                    <div class="section_title">
                       <h2>Hot Categories</h2>
                    </div>
                </div>
           </div>
            <div class="row categories_margin no-gutters">
                <?php foreach ($hot_categories as $key => $value):
                        if(empty($value->category_image))
                        {
                            $img = 'frontfiles/assets/img/custom-p/product1.jpg';
                        }
                        else{
                            $img = 'product_images/'.$value->category_image.'';
                        }
                    ?>
                <div class="col-lg-3 col-md-6">
                    <article class="single_categories_product column1">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="<?php echo base_url(); ?>home/products/<?php echo $value->id; ?>"><img src="<?php echo base_url(); ?><?php echo $img; ?>" alt=""></a>
                            </div>
                            <div class="categories_product_content">
                                <h4><a href="<?php echo base_url(); ?>home/products/<?php echo $value->id; ?>"><?php echo $value->category_name; ?></a></h4>
                                <ul>
                                    <?php foreach ($rand_category as $rand_cat):?>
                                    <li><a href="<?php echo base_url(); ?>home/products/<?php echo $rand_cat->id; ?>"><?php echo $rand_cat->category_name; ?></a></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </figure>
                    </article> 
                </div>
            <?php endforeach; ?>

            </div>
        </div>
    </div>
    <!--Categories product area end-->
    
    <!--product area start-->
    <div class="small_product_area small_product_style2 product_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                   <div class="small_product_list">
                        <div class="section_title">
                           <h2>Computer & Laptop</h2>
                        </div>
                        <div class="row">
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product3.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$86.00</span> 
                                                        <span class="current_price">$79.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product1.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Sit voluptatem rhoncus sem lectus pellentesque eros</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$82.00</span> 
                                                        <span class="current_price">$72.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                       
                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="small_product_list">
                        <div class="section_title">
                           <h2>Electronic & Digital</h2>
                        </div>
                        <div class="row">
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        
                                        
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product9.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Officiis debitis varius risus dignissim massa quis</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$75.00</span> 
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article> 
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        
                                        
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product11.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Sit voluptatem rhoncus sem lectus pellentesque eros</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$86.00</span> 
                                                        <span class="current_price">$79.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                   <div class="small_product_list">
                        <div class="section_title">
                           <h2>Smartphones</h2>
                        </div>
                        <div class="row">
                            <div class="product_carousel small_p_container  product_column1 owl-carousel">
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        
                                        
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product7.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Pellentesque ultricies suscipit est in hendrerit</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$80.00</span> 
                                                        <span class="current_price">$70.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article> 
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        
                                        
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img" href="product-details.html"><img src="<?php echo base_url(); ?>frontfiles/assets/img/product/product4.jpg" alt=""></a>
                                                </div>
                                                <div class="product_content">
                                                    <div class="product_name">
                                                       <h4><a href="product-details.html">Nostrum exercitationem itae neque posuere sem</a></h4>
                                                    </div>
                                                    <div class="product_rating">
                                                       <ul>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                       </ul>
                                                    </div>
                                                    <div class="price_box"> 
                                                        <span class="old_price">$75.00</span> 
                                                        <span class="current_price">$65.00</span>
                                                    </div>
                                                </div>
                                            </figure>
                                        </article>  
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <!--product area end-->

    <!--shipping area start-->
    <div class="shipping_area shipping_two mb-50 mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="<?php echo base_url(); ?>frontfiles/assets/img/about/shipping1.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Free Delivery</h4>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="<?php echo base_url(); ?>frontfiles/assets/img/about/shipping2.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Online Support 24/7</h4>
                            <p>Support online 24 hours a day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="<?php echo base_url(); ?>frontfiles/assets/img/about/shipping3.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Money Return</h4>
                            <p>Back guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="<?php echo base_url(); ?>frontfiles/assets/img/about/shipping4.png" alt="">
                        </div>
                        <div class="shipping_content">
                            <h4>Member Discount</h4>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shipping area end-->