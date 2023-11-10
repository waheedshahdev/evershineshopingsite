<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rusu - Electronics eCommerce HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>frontfiles/assets/img/favicon.ico">
    
    <!-- CSS 
        ========================= -->

        <!-- Plugins CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>frontfiles/assets/css/plugins.css">
        
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>frontfiles/assets/css/style.css">

    </head>

    <body>
     
        <!--header area start-->
        
        <!--Offcanvas menu area start-->
        <div class="off_canvars_overlay">
            
        </div>
        <div class="Offcanvas_menu">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="canvas_open">
                            <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                        </div>
                        <div class="Offcanvas_menu_wrapper">
                            <div class="canvas_close">
                              <a href="javascript:void(0)"><i class="ion-android-close"></i></a>  
                          </div>
                          <div class="header_support">
                            <p><i class="icon ion-android-alarm-clock"></i> Ordered before 17:30, shipped today - Support: <a href="tel:+(012)800456789">(012) 800 456 789 </a></p>
                        </div>
                        <div class="header_account top">
                            <ul>
                                <li class="language"><a href="#">Language : ENG  <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">Currency : USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_account bottom">
                            <ul>
                                <li class="wishlist"><a href="wishlist.html"><i class="icon ion-clipboard"></i> Wishlist </a></li>
                                <li class="top_links"><a href="#"><i class="ion-gear-a"></i> Setting <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_links">
                                        <li><a href="checkout.html">Checkout </a></li>
                                        <li><a href="my-account.html">My Account </a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                        <div class="search_container">
                         <form action="#">
                             <div class="hover_category">
                                <select class="select_option" name="select" id="categori1">
                                    <option selected value="All">All Categories</option>
                                    <?php foreach ($categories as $value):?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->category_name; ?></option>
                                    <?php endforeach; ?>
                                </select>                        
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text">
                                <button type="submit">Search</button> 
                            </div>
                        </form>
                    </div>
                    <div class="mini_cart_wrapper">
                        <a href="javascript:void(0)">
                         <span class="cart_icon">
                             <i class="ion-android-cart"></i>
                         </span>
                         <span class="cart_title">
                            <span class="cart_quantity">2 items </span>
                            <span class="cart_price">$152.00</span>
                        </span>
                    </a>
                    <!--mini cart-->
                    <div class="mini_cart">
                        <div class="mini_cart_inner">
                            <div class="cart_item">
                             <div class="cart_img">
                                 <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/s-product/product.jpg" alt=""></a>
                             </div>
                             <div class="cart_info">
                                <a href="#">Sit voluptatem rhoncus sem lectus</a>
                                <p>Qty: 1 X <span> $60.00 </span></p>    
                            </div>
                            <div class="cart_remove">
                                <a href="#"><i class="ion-android-close"></i></a>
                            </div>
                        </div>
                        <div class="cart_item">
                         <div class="cart_img">
                             <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/s-product/product2.jpg" alt=""></a>
                         </div>
                         <div class="cart_info">
                            <a href="#">Natus erro at congue massa commodo</a>
                            <p>Qty: 1 X <span> $60.00 </span></p>   
                        </div>
                        <div class="cart_remove">
                            <a href="#"><i class="ion-android-close"></i></a>
                        </div>
                    </div>
                    <div class="mini_cart_table">
                        <div class="cart_total">
                            <span>Sub total:</span>
                            <span class="price">$138.00</span>
                        </div>
                        <div class="cart_total mt-10">
                            <span>total:</span>
                            <span class="price">$138.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini_cart_footer">
                 <div class="cart_button">
                    <a href="cart.html">View cart</a>
                </div>
                <div class="cart_button">
                    <a href="checkout.html">Checkout</a>
                </div>

            </div>

        </div>
        <!--mini cart end-->
    </div>
    <div id="menu" class="text-left ">
        <ul class="offcanvas_main_menu">
            <li class="menu-item-has-children active">
                <a href="#">Home</a>
            </li>
            <li class="menu-item-has-children">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li class="menu-item-has-children">
                        <a href="#">Shop Layouts</a>
                        <ul class="sub-menu">
                            <li><a href="shop.html">shop</a></li>
                            <li><a href="shop-fullwidth.html">Full Width</a></li>
                            <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                            <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                            <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                            <li><a href="shop-list.html">List View</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">other Pages</a>
                        <ul class="sub-menu">
                            <li><a href="cart.html">cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">my account</a></li>
                            <li><a href="404.html">Error 404</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Product Types</a>
                        <ul class="sub-menu">
                            <li><a href="product-details.html">product details</a></li>
                            <li><a href="product-sidebar.html">product sidebar</a></li>
                            <li><a href="product-grouped.html">product grouped</a></li>
                            <li><a href="variable-product.html">product variable</a></li>
                            <li><a href="product-countdown.html">product countdown</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="blog-details.html">blog details</a></li>
                    <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                </ul>

            </li>
            <li class="menu-item-has-children">
                <a href="#">pages </a>
                <ul class="sub-menu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">services</a></li>
                    <li><a href="faq.html">Frequently Questions</a></li>
                    <li><a href="contact.html">contact</a></li>
                    <li><a href="login.html">login</a></li>
                    <li><a href="404.html">Error 404</a></li>
                    <li><a href="compare.html">compare</a></li>
                    <li><a href="coming-soon.html">coming soon</a></li>
                </ul>
            </li>
            <li class="menu-item-has-children">
                <a href="my-account.html">my account</a>
            </li>
            <li class="menu-item-has-children">
                <a href="portfolio.html">portfolio</a>
            </li>
            <li class="menu-item-has-children">
                <a href="contact.html"> Contact Us</a> 
            </li>
        </ul>
    </div>
    <div class="Offcanvas_footer">
        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
        <ul>
            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--Offcanvas menu area end-->

<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">  
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#">Language : ENG  <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">Currency : USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-9">
                        <div class="top_right text-right">
                            <div class="header_support">
                                <p><i class="icon ion-android-alarm-clock"></i> Ordered before 17:30, shipped today - Support: <a href="tel:+(012)800456789">(012) 800 456 789 </a></p>
                            </div>
                            <div class="header_account">
                                <ul>
                                    <li class="wishlist"><a href="wishlist.html"><i class="icon ion-clipboard"></i> Wishlist </a></li>
                                    <li class="top_links"><a href="#"><i class="ion-gear-a"></i> Setting <i class="ion-chevron-down"></i></a>
                                        <ul class="dropdown_links">
                                            <li><a href="checkout.html">Checkout </a></li>
                                            <li><a href="my-account.html">My Account </a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <?php if($this->session->userdata('customer_id') != ''){ ?>
                                            <li><a href="<?php echo base_url('home/logout'); ?>">Logout</a></li>
                                        <?php } ?>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo base_url();?>frontfiles/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu menu_position text-right"> 
                            <nav>  
                                <ul>
                                    <li><a class="active"  href="<?php echo base_url(); ?>home">home</a>
                                        
                                    </li>
                                    <li class="mega_items"><a href="shop.html">shop<i class="fa fa-angle-down"></i></a> 
                                        <div class="mega_menu">
                                            <ul class="mega_menu_inner">
                                                <li><a href="#">Shop Layouts</a>
                                                    <ul>
                                                        <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                        <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                        <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                        <li><a href="shop-list.html">List View</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">other Pages</a>
                                                    <ul>
                                                        <li><a href="cart.html">cart</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="my-account.html">my account</a></li>
                                                        <li><a href="404.html">Error 404</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product Types</a>
                                                    <ul>
                                                        <li><a href="product-details.html">product details</a></li>
                                                        <li><a href="product-sidebar.html">product sidebar</a></li>
                                                        <li><a href="product-grouped.html">product grouped</a></li>
                                                        <li><a href="variable-product.html">product variable</a></li>
                                                        <li><a href="product-countdown.html">product countdown</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="#">Concrete Tools</a>
                                                    <ul>
                                                        <li><a href="shop.html">Cables & Connectors</a></li>
                                                        <li><a href="shop-list.html">Graphics Tablets</a></li>
                                                        <li><a href="shop-fullwidth.html">Printers, Ink & Toner</a></li>
                                                        <li><a href="shop-fullwidth-list.html">Refurbished Tablets</a></li>
                                                        <li><a href="shop-right-sidebar.html">Optical Drives</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="blog-details.html">blog details</a></li>
                                            <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                            <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="services.html">services</a></li>
                                            <li><a href="faq.html">Frequently Questions</a></li>
                                            <li><a href="contact.html">contact</a></li>
                                            <li><a href="login.html">login</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="compare.html">compare</a></li>
                                            <li><a href="coming-soon.html">coming soon</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="portfolio.html">portfolio</a></li>
                                    <li><a href="contact.html"> Contact Us</a></li>
                                </ul>  
                            </nav> 
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--header middel end-->

        <!--header bottom satrt-->
        <div class="header_bottom header_bottom_two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">ALL CATEGORIES</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    <!-- <li class="menu_item_children"><a href="#">Brake Parts <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu">
                                            <li class="menu_item_children"><a href="#">Dresses</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Sweater</a></li>
                                                    <li><a href="">Evening</a></li>
                                                    <li><a href="">Day</a></li>
                                                    <li><a href="">Sports</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Handbags</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Shoulder</a></li>
                                                    <li><a href="">Satchels</a></li>
                                                    <li><a href="">kids</a></li>
                                                    <li><a href="">coats</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">shoes</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Ankle Boots</a></li>
                                                    <li><a href="">Clog sandals </a></li>
                                                    <li><a href="">run</a></li>
                                                    <li><a href="">Books</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Clothing</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Coats  Jackets </a></li>
                                                    <li><a href="">Raincoats</a></li>
                                                    <li><a href="">Jackets</a></li>
                                                    <li><a href="">T-shirts</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="menu_item_children"><a href="#"> Wheels & Tires  <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_3">
                                            <li class="menu_item_children"><a href="#">Chair</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dining room</a></li>
                                                    <li><a href="">bedroom</a></li>
                                                    <li><a href=""> Home & Office</a></li>
                                                    <li><a href="">living room</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Lighting</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Ceiling Lighting</a></li>
                                                    <li><a href="">Wall Lighting</a></li>
                                                    <li><a href="">Outdoor Lighting</a></li>
                                                    <li><a href="">Smart Lighting</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Sofa</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Fabric Sofas</a></li>
                                                    <li><a href="">Leather Sofas</a></li>
                                                    <li><a href="">Corner Sofas</a></li>
                                                    <li><a href="">Sofa Beds</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="menu_item_children"><a href="#"> Furnitured & Decor <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Brake Tools</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Driveshafts</a></li>
                                                    <li><a href="">Spools</a></li>
                                                    <li><a href="">Diesel </a></li>
                                                    <li><a href="">Gasoline</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Emergency Brake</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dolls for Girls</a></li>
                                                    <li><a href="">Girls' Learning Toys</a></li>
                                                    <li><a href="">Arts and Crafts for Girls</a></li>
                                                    <li><a href="">Video Games for Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <!-- <li class="menu_item_children"><a href="#"> Turbo System <i class="fa fa-angle-right"></i></a>
                                        <ul class="categories_mega_menu column_2">
                                            <li class="menu_item_children"><a href="#">Check Trousers</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Building</a></li>
                                                    <li><a href="">Electronics</a></li>
                                                    <li><a href="">action figures </a></li>
                                                    <li><a href="">specialty & boutique toy</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu_item_children"><a href="#">Calculators</a>
                                                <ul class="categorie_sub_menu">
                                                    <li><a href="">Dolls for Girls</a></li>
                                                    <li><a href="">Girls' Learning Toys</a></li>
                                                    <li><a href="">Arts and Crafts for Girls</a></li>
                                                    <li><a href="">Video Games for Girls</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <?php foreach ($categories as $value):?>
                                            <li><a href="<?php echo base_url(); ?>home/products/<?php echo $value->id ?>"><?php echo $value->category_name; ?></a></li>
                                        <?php endforeach; ?>
                                  
                                    <!-- <li id="cat_toggle" class="has-sub"><a href="#"> More Categories</a>
                                        <ul class="categorie_sub">
                                            <li><a href="#">Hide Categories</a></li>
                                        </ul>   

                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="bottom_right">
                            <div class="search_container">
                             <form action="<?php echo base_url('home/search_query'); ?>" method="post">
                                 <div class="hover_category">
                                    <select class="select_option" name="select_category" id="categori2">
                                        <option selected value="All">All Categories</option>
                                        <?php foreach ($categories as $value):?>
                                            <option value="<?php echo $value->id ?>"><?php echo $value->category_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>                        
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text" name="search_query">
                                    <button type="submit" name="search" value="Search">Search</button> 
                                </div>
                            </form>
                        </div>
                        <div class="mini_cart_wrapper">
                            <a href="javascript:void(0)">
                             <span class="cart_icon">
                                 <i class="ion-android-cart"></i>
                             </span>
                             <span class="cart_title">
                                <?php 
                                $this->load->library('cart');
                                $cart_data = $this->cart->contents();
                                if (empty($cart_data)){ ?>
                                    <span class="cart_quantity">Cart Empty!</span>
                                <?php } elseif (!empty($cart_data)) {
                                    $count == 0;
                                    foreach ($cart_data as $cart) {
                                        $count++;
                                    }
                                    ?>
                                    <span class="cart_quantity"><?php echo $count; ?> items </span>
                                    <span class="cart_price">$<?php echo $this->cart->total(); ?>.00</span>
                                <?php } ?>
                                
                            </span>
                        </a>

                        <!--mini cart-->
                        <div class="mini_cart">

                            <div class="mini_cart_inner">
                                <?php

                                $this->load->library('cart');
                                $cart_data = $this->cart->contents();
                                 if(empty($cart_data)){

                            ?>
                            <div class="cart_item">
                                 <div class="cart_info">
                                    <p>Cart is Empty!</p>    
                                </div>
                                
                            </div>
                            <?php } else{
                                $count == 0;
                                     foreach ($cart_data as $cart):
                                    $count++;
                                ?>
                                <div class="cart_item">
                                 <div class="cart_img">
                                     <a href="#"><img src="<?php echo base_url($cart['product_image']);?>" alt=""></a>
                                 </div>
                                 <div class="cart_info">
                                    <a href="#"><?php echo $cart['name']; ?></a>
                                    <p>Qty: <?php echo $cart['qty']; ?> X <span> $<?php echo $cart['price']; ?>.00 </span></p>    
                                </div>
                                <div class="cart_remove">
                                    <a href="<?php echo base_url();?>home/remove_cart_item/<?php echo $cart['rowid'];?>"><i class="ion-android-close"></i></a>
                                </div>
                            </div>

                            <?php  endforeach; ?>


                            <div class="mini_cart_table">
                            <div class="cart_total">
                                <span>Sub total:</span>
                                <span class="price">$<?php echo $cart['subtotal']; ?>.00</span>
                            </div>
                            <div class="cart_total mt-10">
                                <span>total:</span>
                                <span class="price">$<?php echo $this->cart->total(); ?>.00</span>
                            </div>
                        </div>

                        <?php } ?>



                        
                    </div>
                    <div class="mini_cart_footer">
                     <div class="cart_button">
                        <a href="<?php echo base_url(); ?>home/cart">View cart</a>
                    </div>
                    <div class="cart_button">
                        <a href="<?php echo base_url('home/checkout'); ?>">Checkout</a>
                    </div>

                </div>

            </div>
            <!--mini cart end-->
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--header bottom end-->
</div> 
</header>
<!--header area end-->





<?php if(isset($view_files))

$this->load->view($view_module.'/'.$view_files);

?>






<!--footer area start-->
<footer class="footer_widgets">
    <!--newsletter area start-->
    <div class="newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter_container">
                        <div class="newsletter_content">
                            <div class="newsletter_icone">
                             <img src="<?php echo base_url();?>frontfiles/assets/img/about/newsletter-icon.png" alt="">
                         </div>
                         <div class="newsletter_text">
                            <h3>Sign Up For Newsletters</h3>
                            <p>Get E-mail updates about our latest shop and special offers.</p>
                        </div>
                    </div>
                    <div class="subscribe_form">
                        <form id="form" method="post" class="footer-newsletter" action="<?php echo base_url('home/signup_newsletter'); ?>">
                            <input id="email" type="email" name="email" autocomplete="off" placeholder="Your email address..." />
                            <button type="submit" id="submit" name="subscribe" value="Subscribe">Subscribe</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts text-centre">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!--newsletter area end-->
<div class="footer_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="widgets_container contact_us">
                 <h3>Contacts us</h3>
                 <div class="footer_contact">
                    <p><span>Address:</span> 123 Main Street, Anytown, CA 12345 - USA.</p>
                    <p><span>Phone:</span> <a href="tel:(012)800456789">(012) 800 456 789</a></p>
                    <p><span>Fax:</span> <a href="tel:(012)800456789">(012) 800 456 789</a></p>
                    <p><span>Email:</span> <a href="#">demo@towerthemes.com</a></p>
                    
                </div>
                <div class="footer_payment">
                    <p>Payment Methods:</p>
                    <img src="<?php echo base_url();?>frontfiles/assets/img/icon/payment.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="widgets_container widget_menu">
                <h3>Information</h3>
                <div class="footer_menu">
                    <ul>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">New products</a></li>
                        <li><a href="#">Best sales</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="#">Order History</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="widgets_container widget_menu">
                <h3>My Account</h3>
                <div class="footer_menu">
                    <ul>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="wishlist.html">Wish List</a></li>
                        <li><a href="#">Prices drop</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="#">International Orders</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="widgets_container widget_menu">
                <h3>Customer Service</h3>
                <div class="footer_menu">
                    <ul>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Order History</a></li>
                        <li><a href="wishlist.html">Wish List</a></li>
                        <li><a href="#">Specials</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-6">
            <div class="widgets_container widget_menu">
                <h3>Let Us Help You</h3>
                <div class="footer_menu">
                    <ul>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Shipping Rates</a></li>
                        <li><a href="#">Amazon Prime</a></li>
                        <li><a href="wishlist.html">Wish List</a></li>
                        <li><a href="#">Manage Your Content</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="footer_bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="copyright_area">
                    <p>Copyright &copy; 2019 <a href="#">Rusu</a>  All Right Reserved.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
             <div class="footer_social text-right">
                 <ul>
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                     <li><a href="#"><i class="fa fa-rss"></i></a></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>
</div>   
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box1" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          <div class="modal_body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <div class="modal_tab">  
                            <div class="tab-content product-details-large">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/product/productbig5.jpg" alt=""></a>    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel">
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/product/productbig4.jpg" alt=""></a>    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel">
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/product/productbig3.jpg" alt=""></a>    
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel">
                                    <div class="modal_tab_img">
                                        <a href="#"><img src="<?php echo base_url();?>frontfiles/assets/img/product/productbig2.jpg" alt=""></a>    
                                    </div>
                                </div>
                            </div>
                            <div class="modal_tab_button">    
                                <ul class="nav product_navactive owl-carousel" role="tablist">
                                    <li >
                                        <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="<?php echo base_url();?>frontfiles/assets/img/product/product8.jpg" alt=""></a>
                                    </li>
                                    <li>
                                       <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="<?php echo base_url();?>frontfiles/assets/img/product/product6.jpg" alt=""></a>
                                   </li>
                                   <li>
                                     <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="<?php echo base_url();?>frontfiles/assets/img/product/product7.jpg" alt=""></a>
                                 </li>
                                 <li>
                                     <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="<?php echo base_url();?>frontfiles/assets/img/product/product5.jpg" alt=""></a>
                                 </li>

                             </ul>
                         </div>    
                     </div>  
                 </div> 
                 <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="modal_right">
                        <div class="modal_title mb-10">
                            <h2 id="product_name"></h2> 
                        </div>
                        <div class="modal_price mb-10">
                            <span class="new_price" id="new_price">$</span>    
                            <span class="old_price" id="price" >$</span>    
                        </div>
                        <div class="modal_description mb-15" >
                            <p id="description"></p>    
                        </div> 
                        <div class="variants_selects">
                            <div class="variants_size">
                             <h2>size</h2>
                             <select class="select_option">
                                 <option selected value="1">s</option>
                                 <option value="1">m</option>
                                 <option value="1">l</option>
                                 <option value="1">xl</option>
                                 <option value="1">xxl</option>
                             </select>
                         </div>
                         <div class="variants_color">
                             <h2>color</h2>
                             <select class="select_option">
                                 <option selected value="1">purple</option>
                                 <option value="1">violet</option>
                                 <option value="1">black</option>
                                 <option value="1">pink</option>
                                 <option value="1">orange</option>
                             </select>
                         </div>
                         <div class="modal_add_to_cart">
                            <form action="#">
                                <input min="1" max="100" step="2" value="1" type="number">
                                <button type="submit">add to cart</button>
                            </form>
                        </div>   
                    </div>
                    <div class="modal_social">
                        <h2>Share this product</h2>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>    
                    </div>      
                </div>    
            </div>    
        </div>     
    </div>
</div>    
</div>
</div>
</div>
<!-- modal area end-->




<!-- JS
    ============================================ -->

    <!-- Plugins JS -->
    <script src="<?php echo base_url();?>frontfiles/assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="<?php echo base_url();?>frontfiles/assets/js/main.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

        $('.add_to_cart').click(function(){

           var product_name = $(this).data('product_name');
           var product_price = $(this).data('product_price');
           var product_id = $(this).data('product_id');
           var quantity = $('#product_quantity').val();
           var product_image = $(this).data('product_image');
           // var quantity = $("#" + product_id).val();

           // alert(product_image);
           if(quantity !=''  && quantity > 0)
           {
                $.ajax({
                    url: '<?php echo base_url();?>home/cart',
                    method: 'POST',
                    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity,product_image:product_image},
                    success:function(data){

                        alert('Product Added to Cart');
                        
                        // $('#cart_detail').html(data);
                        top.location.href="<?php echo base_url();?>home";//redirection
                    }

                });
           }
           else{

            alert('Please Enter Quantity');
           }


        });

    });

    
    /////// Zeeshan Project Frontpage modal //////////////

    $(document).on('click','.home_modal', function(){

var id= $(this).attr('id');
var dollar_sign = '$';
  $.ajax({
    url: "<?php echo base_url(). 'home/fetch_product_data'?>",
    method: 'post',
    data: {id:id},
    dataType: 'json',
    success:function(data){
      console.log(data);
      $.each(data, function(key, value){
        product_name = value.product_name;
        new_price = value.new_price;
        price = value.price;
        description = value.description;
        sub_image = value.sub_image;
        store_sub_item_id = value.id;
      })

      // if(sub_image == '')
      // {

      // }

      $('#product_name').html(product_name);
      $('#new_price').html(new_price);
      $('#price').html(price);
      $('#description').html(description);
      $('#sub_image').html(sub_image);
      // $('#store_sub_item_id').val(store_sub_item_id);

    $('#modal_box1').modal('show');



    }

  })



});
</script>

</body>

</html>