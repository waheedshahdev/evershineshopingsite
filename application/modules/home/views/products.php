<!--     <div class="title-wrapper">
      <div class="container"><div class="container-inner">
 
      </div></div>
    </div> -->

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
          <div class="col-md-12 col-sm-7">

            <div class="row list-view-sorting clearfix">
              <div class="col-md-2 col-sm-2 list-view">
                <a href="javascript:;"><i class="fa fa-th-large"></i></a>
                <a href="javascript:;"><i class="fa fa-th-list"></i></a>
              </div>
              <div class="col-md-10 col-sm-10">
                <!-- <div class="pull-right">
                  <label class="control-label">Show:</label>
                  <select class="form-control input-sm">
                    <option value="#?limit=24" selected="selected">24</option>
                    <option value="#?limit=25">25</option>
                    <option value="#?limit=50">50</option>
                    <option value="#?limit=75">75</option>
                    <option value="#?limit=100">100</option>
                  </select>
                </div> -->
                <!-- <div class="pull-right">
                  <label class="control-label">Sort&nbsp;By:</label>
                  <select class="form-control input-sm">
                    <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                    <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                    <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                    <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                    <option value="#?sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                    <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                    <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                    <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                    <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                  </select>
                </div> -->
              </div>
            </div>
            <!-- BEGIN PRODUCT LIST -->
              <div class="row product-list">
              <!-- PRODUCT ITEM START -->
              <?php foreach ($product_by_category as $products):

                                    if(empty($products->customer_retail_price_new) || $products->customer_retail_price_new == 0)
                                    {
                                        $pr_price = $products->customer_retail_price;
                                        $product_price = '<span class="current_price">$'.$products->customer_retail_price.'.00</span>';
                                    }
                                    else{
                                        $pr_price = $products->customer_retail_price_new;
                                        $product_price = '
                                                <span class="price-new">$'.$products->customer_retail_price_new.'.00</span><span class="price-old">$'.$products->customer_retail_price.'.00</span>';
                                    }

                                    
                                  


                                    if(empty($products->sub_image))
                                    {
                                        $img = 'new_adminfiles/assets/image/product/6product50x59.jpg';
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
                        <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                    </div>
                  </div>
                  <h3><a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>/<?php echo $products->p_info_id; ?>"><?php echo $products->product_name; ?></a></h3>
                  <div class="pi-price">Rs <?php echo $pr_price; ?></div>
                  <!-- <a type="button" class="btn btn-default add2cart add_to_cart" data-product_name="<?php //echo $products->product_name; ?>" data-product_price="<?php //echo $pr_price; ?>" data-product_id="<?php //echo $products->product_id; ?>" data-product_image="<?php //echo $img; ?>" title="Add to cart">Add to cart</a> -->
                  <a href="<?php echo base_url(); ?>home/product_details/<?php echo $products->product_id; ?>/<?php echo $products->p_info_id; ?>" class="btn btn-default add2cart">Add to cart</a>
                </a>
                </div>
              </div>
              <?php endforeach; ?>

              <!-- PRODUCT ITEM END -->

            </div>

            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            <!-- <div class="row">
              <div class="col-md-4 col-sm-4 items-info">Items 1 to 9 of 10 total</div>
              <div class="col-md-8 col-sm-8">
                <ul class="pagination pull-right">
                  <li><a href="javascript:;">&laquo;</a></li>
                  <li><a href="javascript:;">1</a></li>
                  <li><span>2</span></li>
                  <li><a href="javascript:;">3</a></li>
                  <li><a href="javascript:;">4</a></li>
                  <li><a href="javascript:;">5</a></li>
                  <li><a href="javascript:;">&raquo;</a></li>
                </ul>
              </div>
            </div> -->
            <!-- END PAGINATOR -->
            <!-- Price Range was here -->

         
          </div>
          <!-- END SIDEBAR -->

        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>