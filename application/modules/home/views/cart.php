    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Shopping cart</h1>
            <div class="goods-page">
              <div class="goods-data clearfix">
                <div class="table-wrapper-responsive">
                <table summary="Shopping cart">
                  <tr>
                    <th class="goods-page-image">Image</th>
                    <th class="goods-page-quantity">Quantity</th>
                    <th class="goods-page-price">Unit price</th>
                    <th class="goods-page-description">Description</th>
                    <th class="goods-page-ref-no">Ref No</th>
                    <th class="goods-page-total" colspan="2">Total</th>
                  </tr>
                  <?php
                    $count = 1;
                     foreach ($cart_data as $cart):
                    $cn = $count++;
                    $get_size = get_query_data('SELECT * FROM tbl_product_sizes where id = '.$cart['size_id'].'');

                    ?>
                  <tr>
                    <td class="goods-page-image">
                      <a href="javascript:;"><img src="<?php echo base_url($cart['product_image']); ?>" alt="<?php echo $cart['name']; ?>"></a>
                    </td>
                    <td class="goods-page-quantity">

                      <form action="<?php echo base_url(); ?>home/update_quantity/<?php echo $cart['rowid'];?>" method = 'POST'>
                      <div class="product-quantity">
                          <input id="product-quantity" type="text" name="quantity" value="<?php echo $cart['qty']; ?>" readonly class="form-control input-sm">

                      </div>
                      <button class="btn btn-primary" title="" data-toggle="tooltip" type="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                      </form>
                    </td>
                    <td class="goods-page-price">
                      <strong><span>PKR</span> <?php echo $cart['price']; ?>.00</strong>
                    </td>
                    <td class="goods-page-description">
                      <h3><a href="javascript:;"><?php echo $cart['name']; ?></a></h3>
                      <p><strong>Item <?php echo $cart['qty']; ?></strong>Size: <?php echo $cart['size_name']; ?></p>

                    </td>
                    <td class="goods-page-ref-no">
                      <?php echo $cart['product_id']; ?>
                    </td>
                    
                    <td class="goods-page-total">
                      <strong><span>PKR</span> <?php echo $cart['subtotal']; ?>.00</strong>
                    </td>
                    <td class="del-goods-col">
                      <a class="del-goods" href="<?php echo base_url();?>home/remove_cart_item/<?php echo $cart['rowid'];?>">&nbsp;</a>
                    </td>
                  </tr>

                  <?php endforeach; ?>

                 
                </table>
                </div>

                <div class="shopping-total">
                  <ul>
                    <li>
                      <em>Sub total</em>
                      <strong class="price"><span>PKR</span> <?php echo $cart['subtotal']; ?>.00</strong>
                    </li>
                    <li>
                      <em>Shipping cost</em>
                      <strong class="price"><span>PKR</span> <?php echo $cart['delivery_price']; ?>.00</strong>
                    </li>
                    <li class="shopping-total-price">
                      <em>Total</em>
                      <strong class="price"><span>PKR</span> <?php $total =   $this->cart->total(); $get_discounted_amount = $total / 100 * $cart['discount_amount'];    echo $total + $delivery_amount - $get_discounted_amount; ?>.00</strong>
                    </li>
                  </ul>
                </div>
              </div>
              <a href="<?php echo base_url('home'); ?>" class="btn btn-default">Continue shopping <i class="fa fa-shopping-cart"></i></a>
              <a href="<?php echo base_url('home/checkout'); ?>" class="btn btn-primary">Checkout <i class="fa fa-check"></i></a>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        <div class="row margin-bottom-40">
          <div class="col-md-12 col-sm-12">
            <h2>Most popular products</h2>
            <div class="owl-carousel <?php echo $bestsellcarousal; ?>">

              <?php foreach ($rand_product_2 as $key => $value_1):
                                                    if(empty($value_1->customer_retail_price_new) || $value_1->customer_retail_price_new == 0)
                                                        {
                                                            $pr_price = $value_1->customer_retail_price;
                                                            $product_price_1 = '<span class="current_price">Rs '.$value_1->customer_retail_price.'.00</span>';
                                                        }
                                                        else{
                                                            $pr_price = $value_1->customer_retail_price_new;
                                                            $product_price_1 = '<span class="old_price">Rs '.$value_1->customer_retail_price.'.00</span> 
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
                                                        if($value_1->product_area == 'New Arrival'){
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