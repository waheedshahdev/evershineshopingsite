<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Evershine | Online Store</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <meta content="Evershine" name="description">
  <meta content="Evershine Unstitched Suits" name="keywords">

  <link rel="shortcut icon" href="<?php echo base_url(); ?>frontfiles/favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css"><!--- fonts for slider on the index page -->  
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?php echo base_url(); ?>/frontfiles/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?php echo base_url(); ?>/frontfiles/assets/pages/css/animate.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <!-- <link href="<?php //echo base_url(); ?>/frontfiles/assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet"> -->
  <link href="<?php echo base_url(); ?>/frontfiles/carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/carousel/css/owl.theme.default.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/carousel/css/carousel_style.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?php echo base_url(); ?>/frontfiles/assets/pages/css/components.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/pages/css/slider.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/pages/css/style-shop.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/corporate/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/corporate/css/style-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/corporate/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?php echo base_url(); ?>/frontfiles/assets/corporate/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->

                  <!-- Meta Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '982899309606695');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=982899309606695&ev=PageView&noscript=1"
            /></noscript>
            <!-- End Meta Pixel Code -->

            <!-- Google Tag Manager -->
              <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','GTM-W7MPX978');</script>
              <!-- End Google Tag Manager -->

              <!-- Google tag (gtag.js) -->
                <script async src="https://www.googletagmanager.com/gtag/js?id=G-27PCLP9YZJ"></script>
                <script>
                  window.dataLayer = window.dataLayer || [];
                  function gtag(){dataLayer.push(arguments);}
                  gtag('js', new Date());

                  gtag('config', 'G-27PCLP9YZJ');
                </script>

</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="ecommerce">
  
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W7MPX978');</script>
<!-- End Google Tag Manager -->
    <!-- BEGIN TOP BAR -->
    <div class="pre-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12 additional-shop-info">
                    <marquee style="color: black;">Its SALE time! You can now shop for your favorite items in store and online. </marquee>
                </div>
            
            </div>
        </div>        
    </div>
    <!-- END TOP BAR -->

    <!-- BEGIN HEADER -->
    <div class="header">
      <div class="container">
        <a class="site-logo" href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('frontfiles/assets/pages/img/logo.svg'); ?>" class="featured-img" style="width: 140px; height:80px;    margin-top: -28px; margin-left: -20px;"></a>
        <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

        <!-- BEGIN CART -->
        <div class="top-cart-block">


          <?php 

            if (!isMobileDevice()) {
          ?>
          <div class="top-cart-info">

             <?php 
                                $this->load->library('cart');
                                $cart_data = $this->cart->contents();
                                if (empty($cart_data)){ ?>

                                      <span class="cart_quantity" style="color: black;">0</span>
                                <?php } elseif (!empty($cart_data)) {
                                    $count == 0;
                                    foreach ($cart_data as $cart) {
                                        $count++;
                                    }
                                    ?>
            <a href="<?php echo base_url('home/cart'); ?>" class="top-cart-info-count"><?php echo $count; ?> items</a>
            <a href="<?php echo base_url('home/cart'); ?>" class="top-cart-info-value">Rs <?php if(empty($cart_data)){ echo '0';}else{ echo $this->cart->total(); }; ?></a>
            <?php } ?>
          </div>
          <i class="fa fa-shopping-cart"></i>

        <?php } else{ ?>
          <div class="top-cart-info">

            <?php 
                                $this->load->library('cart');
                                $cart_data = $this->cart->contents();

                                if (empty($cart_data)){ ?>

                                      <span class="cart_quantity" style="color: black;">0</span>
                                <?php } elseif (!empty($cart_data)) {
                                    $count = 0;
                                    foreach ($cart_data as $cart) {
                                        $count++;
                                     } ?>
                                  <span class="cart_quantity" style="color: black;"><?php echo $count; ?></span> 
                                  <?php }
                                    ?>

            
      <i class="fa fa-shopping-cart"></i>
    </div>

        <?php } ?>


          
                        
          <div class="top-cart-content-wrapper">
            <div class="top-cart-content">
              <ul class="scroller" style="height: 250px;">
                
                
              <?php if(!empty($cart_data)){

                  foreach ($cart_data as $cart):?>
                    

                <li>
                  <a href="#"><img src="<?php echo base_url($cart['product_image']); ?>" alt="<?php echo $cart['name']; ?>" width="37" height="34"></a>
                  <span class="cart-content-count">x <?php echo $cart['qty']; ?></span>
                  <strong><a href="<?php echo base_url('home/product_details/'.$cart['product_id'].'/'.$cart['p_info_id'].''); ?>"><?php echo $cart['name']; ?></a></strong>
                  <em>PKR <?php echo $cart['price']; ?></em>
                  <a href="<?php echo base_url();?>home/remove_cart_item/<?php echo $cart['rowid'];?>" class="del-goods">&nbsp;</a>
                </li>
                <?php
                endforeach;
              } ?>



              </ul>
              <div class="text-right">
                <a href="<?php echo base_url('home/myaccount'); ?>" class="btn btn-primary" style="float: left;">My Account</a>
                <a href="<?php echo base_url('home/cart'); ?>" class="btn btn-default">View Cart</a>
                <a href="<?php echo base_url('home/cart'); ?>" class="btn btn-primary">Checkout</a>
              </div>
            </div>
          </div>            
        </div>
        <!--END CART -->

        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation">
          <ul>
            <li><a href="<?php echo base_url('/'); ?>">Home</a></li>
            
            <li class="dropdown dropdown-megamenu">
              <a class="dropdown-toggle" data-toggle="dropdown" data-target="#" href="javascript:;">
                Unstitched Suits
                
              </a>
              <ul class="dropdown-menu">
                <li>
                  <div class="header-navigation-content">
                    <div class="row">
                      
                      <?php
                          $count == 0; 
                          foreach ($categories as $cat):?>
                      <div class="col-md-4 header-navigation-col">
                        
                        <h4><?php echo $cat->category_name; ?></h4>
                        <ul>
                          <?php $sub_category = get_query_data('SELECT * FROM tbl_sub_category where category_id = '.$cat->id.'');
                            foreach ($sub_category as $sub_cat):?>
                          <li><a href="<?php echo base_url('home/products/'.$cat->id.'/'.$sub_cat->id.''); ?>"><?php echo $sub_cat->sub_category_name; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                      </div>
                        <?php endforeach; ?>

                      
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="<?php echo base_url('home/products'); ?>">Shop</a></li>
            <li><a href="<?php echo base_url('home/myaccount'); ?>">My Account</a></li>
            <li><a href="<?php echo base_url('home/contact'); ?>">Contact Us</a></li>
            <li class="menu-search">
              <span class="sep"></span>
              <i class="fa fa-search search-btn"></i>
              <div class="search-box">
                <form action="<?php echo base_url('home/search_query'); ?>" method="POST">
                  <div class="input-group">
                    <input type="text" placeholder="Search" name="search_query" required class="form-control">
                    <span>
                      <button class="btn btn-primary" type="submit" name="search" value="Search">Search</button>
                    </span>
                  </div>
                </form>
              </div> 
            </li>
            
          </ul>
        </div>
        <!-- END NAVIGATION -->
      </div>
    </div>
    <!-- Header END -->




<?php if(isset($view_files))

          $this->load->view($view_module.'/'.$view_files);

       ?>
       <style type="text/css">
         
         .wfloat{
  position:fixed;
  width:60px;
  height:60px;
  bottom:70px;
  right:20px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px !important;
  text-align:center;
  font-size:34px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}
       </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=03485494647" class="wfloat" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
    <!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">

      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>About us</h2>
            <p>Introducing Evershine's Unstitched Elegance! </p>

<p style="text-align: justify;">Transform your style with our latest unstitched suit for females. Embrace the freedom of creating your own masterpiece as you stitch together the perfect ensemble. Crafted with care and adorned with intricate details, this unstitched suit is a canvas waiting for your personal touch.</p>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->
          <!-- BEGIN BOTTOM INFO BLOCK -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Information</h2>
            <ul class="list-unstyled">
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('home/myaccount/'.encode_id(1).''); ?>">Order Tracking</a></li>
              <!-- <li><i class="fa fa-angle-right"></i> <a href="javascript:;">Shipping &amp; Returns</a></li> -->
              <li><i class="fa fa-angle-right"></i> <a href="<?php echo base_url('home/contact'); ?>">Contact Us</a></li>
            </ul>
          </div>
          <!-- END INFO BLOCK -->


          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-3 col-sm-6 pre-footer-col">
            <h2>Our Contacts</h2>
            <address class="margin-bottom-40">
              City Plaza, 10th Ave<br>
              F-10, Markaz, Near Maroof Hospital, Islamabad<br>
              Phone: 0348 5494647<br>
              Email: <a href="mailto:evershine714@gmail.com">evershine714@gmail.com</a><br>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->
        </div>

      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-4 col-sm-4 padding-top-10">
            2023 © Evershine.com. ALL Rights Reserved. 
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-4 col-sm-4">
            <ul class="list-unstyled list-inline pull-right">
              <li><img src="<?php echo base_url(); ?>/frontfiles/assets/corporate/img/payments/MasterCard.jpg" alt="We accept MasterCard" title="We accept MasterCard"></li>
              <li><img src="<?php echo base_url(); ?>/frontfiles/assets/corporate/img/payments/visa.jpg" alt="We accept Visa" title="We accept Visa"></li>
            </ul>
          </div>
          <!-- END PAYMENTS -->
          <!-- BEGIN POWERED -->
     
          <!-- END POWERED -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/respond.min.js"></script>  
    <![endif]-->
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?php echo base_url(); ?>/frontfiles/assets/corporate/scripts/back-to-top.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <!-- <script src="<?php// echo base_url(); ?>/frontfiles/assets/plugins/owl.carousel/owl.carousel.min.js" type="text/javascript"></script> -->
    <script src='<?php echo base_url(); ?>/frontfiles/assets/plugins/zoom/jquery.zoom.min.js' type="text/javascript"></script><!-- product zoom -->
    <script src="<?php echo base_url(); ?>/frontfiles/assets/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script><!-- Quantity -->

    <script src="<?php echo base_url(); ?>/frontfiles/assets/corporate/scripts/layout.js" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url(); ?>/frontfiles/assets/pages/scripts/bs-carousel.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>/frontfiles/carousel/js/popper.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/frontfiles/carousel/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/frontfiles/carousel/js/main.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initTwitter();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script type="text/javascript">
    $(document).ready(function(){

        $('.add_to_cart').click(function(){

          var cart_product_id = $('#cart_product_id').val();
          var cart_qty = parseInt($('#cart_qty').val());
           var product_name = $(this).data('product_name');
           var product_price = $(this).data('product_price');
           var product_id = $(this).data('product_id');
           var quantity = parseInt($('#product_quantity').val());
           var size_id = $('#size').val();
           var size_price = $('#size_price1').val();
           var check_qty = parseInt($('#qty_check').val());
           var product_image = $(this).data('product_image');
           var p_info_id = $(this).data('p_info_id');
           var weight = $(this).data('weight');

            // alert(cart_qty);
                // 10      <=  34


                if(cart_product_id == product_id){
                    checking_cart_qty = cart_qty;
                  }else{
                    checking_cart_qty = 0;
                  }


                if(cart_qty == '' || cart_qty == 0){
                  total_used_qty = quantity;

                }
                else{
                  total_used_qty = checking_cart_qty + quantity;
                }

                
              // alert(total_used_qty);
         
          if(quantity  <= check_qty){

                 if(quantity !=''  && quantity > 0)
           {
              if(total_used_qty <= check_qty){


                $.ajax({
                    url: '<?php echo base_url();?>home/cart',
                    method: 'POST',
                    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity,product_image:product_image,size_id:size_id,p_info_id:p_info_id,size_price:size_price},
                    success:function(data){

                        // alert('Product Added to Cart');
                             Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Product Added to Cart Successfully!',
                                
                              })
                        setTimeout(function() {
                            location.reload();
                        }, 2000);
                     
                    }

                });

                }
            else{
              alert('Product is Out of Stock or maybe already in cart');
            }


           }
           else{

            alert('Please Enter Quantity');
           }




           }
           else{
            alert('Please select size or color to add in cart!');
           }

            

           

           // alert(quantity);
      


        });

    });

 
        // Member wishlist
        $(document).ready(function(){

        $('.wishlist').click(function(){


           var product_id = $(this).data('product_id');
        
                $.ajax({
                    url: '<?php echo base_url();?>home/add_to_wishlist',
                    method: 'POST',
                    data:{product_id:product_id},
                    success:function(data){
//e.preventDefault();
    // your code here
   // return false;
     Swal.fire({
  icon: 'success',
  title: 'Success',
  text: 'Product Added to Wishlist!',
  
})
                         // alert('Product Added to Cart');
                        
                        // $('#cart_detail').html(data);
                        // top.location.href="<?php// echo base_url();?>member/products";//redirection
                    }

                });
         

        });

    });

    // END member wishlist
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
        customer_retail_price_new = value.customer_retail_price_new;
        customer_retail_price = value.customer_retail_price;
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

    $('#product-pop-up').modal('show');



    }

  })



});




        $(document).on('change','#size', function(){

  var size = $('#size').val();
  var product_id = $('#product_id').val();
  // var size_name = $(this).data('size_name');
// alert(size_name);
  if(size !=''){
    $.ajax({
      url: '<?php echo base_url();?>home/fetch_size_price',
      method: 'post',
      data: {size:size,product_id:product_id},
      success:function(data){

       $('#size_price').html(data);
       $('#size_price1').val(data);
       // alert(data);

      }

    })  

  }


});



            $(document).on('change','#size', function(){

  var size = $('#size').val();
  var product_id = $('#product_id').val();
  // var size_name = $(this).data('size_name');
// alert(size_name);
  if(size !=''){
    $.ajax({
      url: '<?php echo base_url();?>home/fetch_stock',
      method: 'post',
      data: {size:size,product_id:product_id},
      success:function(data){
        
       $('#stock').html(data);
       // alert(data);

      }

    })  

  }


});
    // END stock
$(document).ready(function(){
  $("#orderbtn").click(function(){

    // alert('sdfsd');
    $("#order").addClass("show");
    $("#profile").removeClass("show");
    $("#accounts").removeClass("show");
    $("#password").removeClass("show");
  });
});

$(document).ready(function(){
  $("#accountbtn").click(function(){

    // alert('sdfsd');
    $("#order").removeClass("show");
    $("#profile").removeClass("show");
    $("#accounts").addClass("show");
    $("#password").removeClass("show");
  });
});

$(document).ready(function(){
  $("#profilebtn").click(function(){

    // alert('sdfsd');
    $("#order").removeClass("show");
    $("#profile").addClass("show");
    $("#accounts").removeClass("show");
    $("#password").removeClass("show");
  });
});

$(document).ready(function(){
  $("#passwordbtn").click(function(){

    // alert('sdfsd');
    $("#order").removeClass("show");
    $("#profile").removeClass("show");
    $("#password").addClass("show");
    $("#accounts").removeClass("show");
  });
});

                              $(document).on('click','#register', function(){

  var checkbox = $(this).val();
// alert(checkbox);
if(checkbox == 'Register')
{
  $('#customer_login').val('Register');
}
if(checkbox == 'Login')
{
  $('#customer_login').val('Login');
}

// alert(size_name);
  // if(size !=''){
  //   $.ajax({
  //     url: '<?php echo base_url();?>home/fetch_stock',
  //     method: 'post',
  //     data: {size:size,product_id:product_id},
  //     success:function(data){
        
  //      $('#stock').html(data);
  //      // alert(data);

  //     }

  //   })  

  // }


});
</script>


  <script src="<?php echo base_url();?>new_adminfiles/assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".vertical-center-4").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 2
      });
      $(".vertical-center-3").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".vertical-center-2").slick({
        dots: true,
        vertical: true,
        centerMode: true,
        slidesToShow: 2,
        slidesToScroll: 2
      });
      $(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
      $(".vertical").slick({
        dots: true,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".regular").slick({
        dots: true,
        infinite: true,
        autoplay:true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 1
      });
      $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        autoplay:true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });
    });
</script>

</body>
<!-- END BODY -->
</html>