<!--     <div class="title-wrapper">
      <div class="container"><div class="container-inner">
        <h1><span>Products</span> Category</h1>
        <em>Over 1000 Items are available here</em>
      </div></div>
    </div> -->

    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo base_url('home/products'); ?>">Store</a></li>
            <li class="active">Product Categories</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="col-md-9 col-sm-7">
            





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
              <?php foreach ($categories as $category):?>

              <div class="col-md-4 col-sm-6 col-xs-12">
                <a href="<?php echo base_url(); ?>home/products/<?php echo $category->id; ?>">
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="<?php echo base_url(); ?>product_images/<?php echo $category->category_image;  ?>" style="border-radius: 20px !important;" class="img-responsive">
                    <div>
                        <!-- <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a> -->
                    </div>
                  </div>
                  
                </div>
                </a>
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
          <!-- BEGIN CONTENT -->
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
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>