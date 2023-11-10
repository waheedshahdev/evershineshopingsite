<div id="column-left" class="col-sm-3 hidden-xs column-left">
            <div class="column-block">
                <div class="columnblock-title">Categories</div>
                <div class="category_block">
                    <ul class="box-category treeview-list treeview">
                        <!-- <li><a href="#" class="activSub">Desktops</a>
                            <ul>
                                <li><a href="#">PC</a></li>
                                <li><a href="#">MAC</a></li>
                            </ul>
                        </li> -->
                        
                        <?php foreach ($categories as $categ):

                            $sub_cat = get_query_data('SELECT * FROM tbl_sub_category where category_id = '.$categ->id.'');
                            if(!empty($sub_cat)){
                                ?>

                                <li class="expandable"><a href="<?php echo base_url('home/products'); ?>/<?php echo $categ->id; ?>" class="activSub"><?php echo $categ->category_name; ?></a>
                                <ul>

                                <?php foreach ($sub_cat as $value) {

                                    $output = ' <li><a href="'.base_url('home/products').'/'.$categ->id.'/'.$value->id.'">'.$value->sub_category_name.'</a></li>'; 

                                    echo $output;
                                }
                                    

                                    ?>
                     
                             
                               
                                </ul>
                                </li>


                                
                      

                                <?php
                            }
                            else {?>
                      
                        <li><a href="<?php echo base_url('home/products/'.$categ->id.''); ?>"><?php echo $categ->category_name; ?></a></li>
                   
                            <?php }

                            ?>


                        
                        
                        <?php endforeach;?>
                    

                        
                  <!--       <li><a href="#">Software</a></li>
                        <li><a href="#">Phones & PDAs</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">MP3 Players</a></li> -->
                    </ul>
                </div>
            </div>

            <h3 class="productblock-title">Latest</h3>
            <div class="row latest-grid product-grid">

            	<?php foreach ($rand_products as $products):
                                    if(empty($products->new_price) || $products->new_price == 0)
                                    {
                                        $pr_price = $products->price;
                                        $product_price = '<span class="current_price">$'.$products->price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->new_price;
                                        $product_price = '
                                                <span class="current_price">$'.$products->new_price.'.00</span>';
                                    }

                                  


                                    if(empty($products->sub_image))
                                    {
                                        $img = 'new_adminfiles/assets/image/product/1product50x59.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$products->sub_image.'';
                                    }

                                ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">
                    	<input type="hidden" name="product_quantity" id="product_quantity" value="1">

                        <div class="image product-imageblock"><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->id; ?>"><img src="<?php echo base_url($img); ?>" style="width:60px; height: 60px" alt="<?php echo $products->product_name; ?>" title="<?php echo $products->product_name; ?>" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn add_to_cart" data-product_name="<?php echo $products->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $products->product_id; ?>" data-product_image="<?php echo $img; ?>" title="Add to cart">Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>

                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->id; ?>" title="<?php echo $products->product_name; ?>"><?php echo $products->product_name; ?></a></h4>
                            <p class="price product-price"><?php echo $product_price; ?></p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>

                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn add_to_cart" data-product_name="<?php echo $products->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $products->product_id; ?>" data-product_image="<?php echo $img; ?>" title="Add to cart">Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                
                
            </div>
            <h3 class="productblock-title">Specials</h3>
            <div class="row special-grid product-grid">

                <?php foreach ($rand_product_1 as $products):
                                    if(empty($products->new_price) || $products->new_price == 0)
                                    {
                                        $pr_price = $products->price;
                                        $product_price = '<span class="current_price">$'.$products->price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->new_price;
                                        $product_price = '
                                                <span class="current_price">$'.$products->new_price.'.00</span>';
                                    }

                                  


                                    if(empty($products->sub_image))
                                    {
                                        $img = 'new_adminfiles/assets/image/product/6product50x59.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$products->sub_image.'';
                                    }

                                ?>
                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 product-grid-item">
                    <div class="product-thumb transition">


                        <div class="image product-imageblock"><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->id; ?>"><img src="<?php echo base_url($img); ?>" style="width:60px; height: 60px" alt="<?php echo $products->product_name; ?>" title="<?php echo $products->product_name; ?>" class="img-responsive" /></a>
                            <div class="button-group">
                                <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                <button type="button" class="addtocart-btn add_to_cart" data-product_name="<?php echo $products->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $products->product_id; ?>" data-product_image="<?php echo $img; ?>" title="Add to cart" >Add to Cart</button>
                                <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </div>
                        </div>

                        <div class="caption product-detail">
                            <h4 class="product-name"><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->id; ?>" title="<?php echo $products->product_name; ?>"><?php echo $products->product_name; ?></a></h4>
                            <p class="price product-price"><?php echo $product_price; ?></p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        </div>

                        <div class="button-group">
                            <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                            <button type="button" class="addtocart-btn add_to_cart" data-product_name="<?php echo $products->product_name; ?>" data-product_price="<?php echo $pr_price; ?>" data-product_id="<?php echo $products->product_id; ?>" data-product_image="<?php echo $img; ?>" title="Add to cart" >Add to Cart</button>
                            <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>


            </div>
        </div>