
    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Search Result</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="col-md-12 col-sm-7">

            <div class="row list-view-sorting clearfix">
              <div class="col-md-2 col-sm-2 list-view">
                <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                <a href="javascript:;"><i class="fa fa-th-list"></i></a>
              </div>
              <div class="col-md-10 col-sm-10">
              </div>
            </div>
            <!-- BEGIN PRODUCT LIST -->
              <div class="row product-list">
              <!-- PRODUCT ITEM START -->
              <?php foreach ($search_products as $products):
                                if(empty($products->customer_retail_price_new) || $products->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $products->customer_retail_price;
                                        $product_price = '<span class="current_price">$'.$products->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->customer_retail_price_new;
                                        $product_price = '<span class="old_price">$'.$products->customer_retail_price_new.'.00</span> 
                                                <span class="current_price">$'.$products->customer_retail_price.'.00</span>';
                                    }
                                if(empty($products->sub_image))
                                    {
                                        $img = 'frontfiles/assets/img/product/product1.jpg';
                                    }
                                    else{
                                        $img = 'product_images/'.$products->sub_image.'';
                                    }
                            ?>



              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="product-item">
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>/<?php echo $products->p_info_id; ?>">
                  <div class="pi-img-wrapper">
                    <img src="<?php echo base_url($img);?>" class="img-responsive" alt="<?php echo $products->product_name; ?>" style="border-radius: 20px !important;">
                    <div>
                    </div>
                  </div>
                  <h3><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>/<?php echo $products->p_info_id; ?>"><?php echo $products->product_name; ?></a></h3>
                  <div class="pi-price">Rs <?php echo $pr_price; ?></div>
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>/<?php echo $products->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>
                </a>
                </div>
              </div>
              <?php endforeach; ?>

              <!-- PRODUCT ITEM END -->

            </div>

          </div>
          <!-- END SIDEBAR -->

        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>