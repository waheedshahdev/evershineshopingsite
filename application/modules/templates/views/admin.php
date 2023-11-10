




<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="">
    <meta name="description"
        content="Evershine pk">
    <meta name="robots" content="noindex,nofollow">
    <title>EverShine | Admin Area</title>
    <link rel="canonical" href="" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>new_adminfiles/assets/image/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>new_adminfiles/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>new_adminfiles/assets/dist/css/style.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>new_adminfiles/assets/dist/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>adminfiles/assets/css/lib/datatable/dataTables.bootstrap.min.css">



    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?php echo base_url('admin'); ?>">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo base_url(); ?>new_adminfiles/assets/image/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo base_url(); ?>new_adminfiles/assets/image/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?php echo base_url(); ?>new_adminfiles/assets/image/logo-text.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="<?php echo base_url(); ?>new_adminfiles/assets/image/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input style="height: 65px;" type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                    class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                    
                    
                        
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                                
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <ul class="list-style-none">
                                    <li>
                                        <div class="drop-title bg-primary text-white">
                                            <h4 class="mb-0 mt-1"><?php echo get_total('id', 'tbl_order', 'order_status = "Pending"'); ?> New</h4>
                                            <span class="font-light">Order Notifications</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications ps-container ps-theme-default" data-ps-id="2d1f4403-84fb-4635-7215-92394e20d454">
                                            
                                            <?php $get_orders = get_query_data('SELECT O.id as order_id, O.created_at as order_date, C.first_name as first_name  FROM tbl_order as O JOIN tbl_customers as C on C.customer_id = O.customer_id where order_status = "Pending" order by O.created_at DESC LIMIT 4');
                                                if(!empty($get_orders)){
                                                    foreach ($get_orders as $c_orders) {
                                                       ?>
                                                       <a href="<?php echo base_url('admin/order_detail/'.$c_orders->order_id.''); ?>" class="message-item">
                                                            <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                            <div class="mail-contnet">
                                                                <h5 class="message-title"><?php echo $c_orders->first_name; ?></h5> <span class="mail-desc">Just a reminder that you have New order</span> <span class="time"><?php echo $c_orders->order_date; ?></span> </div>
                                                        </a>
                                                       <?php
                                                    }
                                                }
                                      
                                                        ?>
                                                       
                                                  
                                            
                                            <!-- Message -->
                                           
                                          
                                        <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center mb-1 text-dark" href="<?php echo base_url('admin/orders'); ?>"> <strong>Check all Orders Notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>new_adminfiles/assets/image/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="<?php echo base_url(); ?>new_adminfiles/assets/image/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0"><?php echo $this->session->userdata('username');?></h4>
                                        <p class=" mb-0"><?php echo $this->session->userdata('email');?></p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url('admin/profile'); ?>"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url('admin/logout'); ?>"><i class="fa fa-power-off mr-1 ml-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile d-flex no-block dropdown m-t-20">
                                <div class="user-pic"><img src="<?php echo base_url(); ?>new_adminfiles/assets/image/users/1.jpg" alt="users"
                                        class="rounded-circle" width="40" /></div>
                                <div class="user-content hide-menu m-l-10">
                                    <a href="javascript:void(0)" class="" id="Userdd" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <h5 class="m-b-0 user-name font-medium"> <?php echo $this->session->userdata('username');?> <i
                                                class="fa fa-angle-down"></i></h5>
                                        <span class="op-5 user-email"><?php echo $this->session->userdata('email');?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="<?php echo base_url('admin/profile'); ?>"><i
                                                class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo base_url();?>admin/logout"><i
                                                class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        
                        <!-- User Profile-->
                        <li class="sidebar-item selected"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>admin" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Dashboard </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>admin/customers" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Customers</span>
                            </a>
                        </li>
                        
                   
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>admin/product_category" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Product Category </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>admin/sub_category" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Product Sub Category </span>
                            </a>
                        </li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url();?>admin/wishlist" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Wishlist </span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark active" href="javascript:void(0)"
                                aria-expanded="false">
                                <i class="mdi mdi-border-all"></i>
                                <span class="hide-menu">Ecommerce </span>
                            </a>
                            <ul aria-expanded="false" class="collapse first-level in">
                                <li class="sidebar-item active"><a href="<?php echo base_url();?>admin/products" class="sidebar-link"><i
                                            class="mdi mdi-adjust"></i><span class="hide-menu"> Manage Products </span></a></li>
                                
                              
                                <li class="sidebar-item"><a href="<?php echo base_url();?>admin/orders" class="sidebar-link"><i
                                    class="mdi mdi-adjust"></i><span class="hide-menu"> Order Report </span></a>
                                </li>
                                 
                                <li class="sidebar-item"><a href="<?php echo base_url();?>admin/discount_coupon" class="sidebar-link"><i
                                    class="mdi mdi-adjust"></i><span class="hide-menu"> Discount Coupon </span></a>
                                </li>

                                
                                
                        
                            </ul>
                        </li>
                    
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url('logout'); ?>" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span class="hide-menu">Logout </span>
                            </a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->                
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        








     




<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
   <?php if(isset($view_files))

          $this->load->view($view_module.'/'.$view_files);

       ?>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved. Designed and Developed by <a
                    href="">HYM Digital</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>


        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
       <script
  src="https://code.jquery.com/jquery-2.2.4.js"
  integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/libs/popper.js/dist/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/dist/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/dist/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?php echo base_url(); ?>new_adminfiles/assets/dist/js/pages/dashboards/dashboard1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

        $(document).on('change','#pr_category_id', function(){

  var category_id = $('#pr_category_id').val();

  if(category_id !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_sub_cat_product',
      method: 'post',
      data: {category_id:category_id},
      success:function(data){
        
       $('#sub_cat_id').html(data);

      }

    })  

  }


});
    // start users list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#user_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/user_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end users list

     // customer list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#customer_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/customers_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end customer list

         // start purchase list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#contact_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/contact_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end purchase list


    // Block customer

$(document).on('click','.block_customer', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/block_customer'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#customer_table').DataTable().ajax.reload();


    }

  })


});
    // end Block customer

    // Unblock customer

$(document).on('click','.unblock_customer', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/unblock_customer'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#customer_table').DataTable().ajax.reload();


    }

  })


});
    // end unblock customer




    // add shop

      $(document).on('submit','#add_shop',function(event){
            event.preventDefault();
            var shop_name = $('#shop_name').val();
            var shop_phone = $('#shop_phone').val();
            var shop_password = $('#shop_password').val();
            var shop_email = $('#shop_email').val();
            var shop_address = $('#shop_address').val();
            var shop_image = $('#shop_image').val();

                     
                $.ajax({
                    url: "<?php echo base_url();?>admin/add_shop",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        
                        //alert(data);
                        location.reload();
                         $('#add_shop')[0].reset();
                        // var id = $('#vendor_id').val();
                        // location.href = '<?php echo base_url();?>admin/update_vendor/'+id;
                    }
                });
          

        });





        // Block shop

$(document).on('click','.block_shop', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/block_shop'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_table').DataTable().ajax.reload();


    }

  })


});
    // end Block shop

    // Unblock shop

$(document).on('click','.unblock_shop', function(){
  var id = $(this).attr('id');

  $.ajax({
    url: "<?php echo base_url(). 'admin/unblock_shop'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_table').DataTable().ajax.reload();


    }

  })


});
    // end unblock shop


        // add shop product

      $(document).on('submit','#add_shop_product',function(event){
            event.preventDefault();
            var shop_id = $('#shop_id').val();
            var category_id = $('#category_id').val();
            var product_name = $('#product_name').val();
            var price = $('#price').val();
            var quantity = $('#quantity').val();
            var description = $('#description').val();

                     
                $.ajax({
                    url: "<?php echo base_url();?>admin/add_shop_product",
                    method: 'POST',
                    data: new FormData(this),
                    contentType: false,
                    processData: false,
                    success: function(data)
                    {
                        
                        //alert(data);
                        $('#product_table').DataTable().ajax.reload();
                    }
                });
          

        });

           // shop product list
    var tbl_category;
    $(document).ready(function(){ 
      var shop_id = $('#shop_id').val();
      tbl_category = $('#product_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/shop_product_list/'; ?>"+shop_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end product list

               // withdrawal Request list
    var tbl_category;
    $(document).ready(function(){ 
      tbl_category = $('#withdrawal_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/withdrawal_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end withdrawal Request list

               // shop product list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/category_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop list
    // sub category
       var tbl_category;
    $(document).ready(function(){ 
    var category_id = $('#category_id').val(); 
      tbl_category = $('#sub_category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/sub_category_list/'; ?>"+category_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 5],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end sub category
    
                       // shop Notification list
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#notification_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/notification_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end Notification list


        // sub category table
    var tbl_category;
    $(document).ready(function(){  
      tbl_category = $('#product1_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/product_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });

    // end subcategory


    // dependent dropdown of categor and sub category

    $(document).on('change','#shop_category_id', function(){

  var category_id = $('#shop_category_id').val();


  if(category_id !=''){
    $.ajax({
      url: '<?php echo base_url();?>admin/fetch_sub_cat',
      method: 'post',
      data: {category_id:category_id},
      success:function(data){
        
       $('#sub_category_id').html(data);

      }

    })  

  }


});
    // end dependent dropdown

    // delete category 
    $(document).on('click','.delete_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete category

        // delete category 
    $(document).on('click','.delete_sub_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Sub Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_sub_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#sub_category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete category


    // shop category list
    var tbl_category;
    $(document).ready(function(){ 
      var shop_id = $('#add_shop_id').val();
      tbl_category = $('#shop_category_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/shop_category_list/'; ?>"+shop_id,  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // end shop category list

            // delete shop category 
    $(document).on('click','.delete_shop_category', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Shop Category?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_shop_category'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      $('#shop_category_table').DataTable().ajax.reload();


    }

  })
  }
  else{
    return false;
  }


});
    // end delete shop category

                // update Product Image 
                $(document).on('click', '.update_product_image', function(){
                  $('#image_id').val($(this).attr("id"));

                });

                $('#product_form').submit(function(event){
                  event.preventDefault();
                  var image_name = $('#product_image').val();
                  if(image_name == '')
                  {
                   alert("Please Select Image");
                   return false;
                 }
                 else
                 {
                   var extension = $('#product_image').val().split('.').pop().toLowerCase();
                   if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                   {
                    alert("Invalid Image File");
                    $('#product_image').val('');
                    return false;
                  }
                  else
                  {
                    $.ajax({
                     url: "<?php echo base_url(). 'admin/update_product_image'?>",
                     method:"POST",
                     data:new FormData(this),
                     contentType:false,
                     processData:false,
                     success:function(data)
                     {
                      alert(data);

                 $('#product_form')[0].reset();

                 $('#sub_category_table').DataTable().ajax.reload();
                 location.reload(true);

    }
  });
                  }
                }
              });


    // end Update Product Image


        // Order list
    var tbl_category;
    $(document).ready(function(){ 
      tbl_category = $('#order_table').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'admin/order_list'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
 });
    // END order list



        // edit Delivery charges
$(document).on('click','.edit_delivery', function(){

var id= $(this).attr('id');
  $.ajax({
    url: "<?php echo base_url(). 'admin/fetch_delivery_data'?>",
    method: 'post',
    data: {id:id},
    dataType: 'json',
    success:function(data){
      console.log(data);
      $.each(data, function(key, value){
        delivery_price = value.delivery_price;
        status = value.status;
        delivery_id = value.id;
      })
      $('#delivery_price').val(delivery_price);
      $('#status').val(status);
      $('#delivery_id').val(delivery_id);
      $('#submit').val('Update');
    $('#myModal_delivery').modal('show');



    }

  })



});

// End edit Delivery
// delivery Coupon Edit
$(document).on('click','.edit_delivery_coupon', function(){

var id= $(this).attr('id');
  $.ajax({
    url: "<?php echo base_url(). 'admin/fetch_delivery_coupon_data'?>",
    method: 'post',
    data: {id:id},
    dataType: 'json',
    success:function(data){
      console.log(data);
      $.each(data, function(key, value){
        delivery_coupon = value.delivery_coupon;
        delivery_status = value.delivery_status;
        delivery_coupon_id = value.id;
      })
      $('#delivery_coupon').val(delivery_coupon);
      $('#delivery_status').val(delivery_status);
      $('#delivery_coupon_id').val(delivery_coupon_id);
      $('#submit_delivery_coupon').val('Update');
    $('#myModal_delivery_coupon').modal('show');



    }

  })



});

// ENd Delviery Coupon

// delete image
    $(document).on('click','.delete_image', function(){
  var id = $(this).attr('id');

  if(confirm('Are you Sure you want to delete Image?')){

  $.ajax({
    url: "<?php echo base_url(). 'admin/delete_product_image'?>",
    method: 'post',
    data: {id:id},
    success:function(data){
      alert(data);
      location.reload();


    }

  })
  }
  else{
    return false;
  }


});
// end delete image

    // wihs list 
            $(document).on('change','#wishlist_status', function(){

$("table.adminlist tr").each(function (i) {      
      //loop tr's in table with class 'adminlist'
      $(this).children("input").each(function (j) {
         //loop input elements within tr's, get value and do alert      
         item_id = j.value;            
         alert(item_id);            
      });
   }); 








//   var status = $('#wishlist_status').val();
//  //  var n='state_'+wish_id;
//  //  alert(n);
//  // // var status = $('#stat_'+wish_id).val();
//  //  var status = $('input[name="n"]').val();
//   var wish_id = $(this).data('wish_id');
// alert(wish_id);
// alert(status);
  
  if(confirm('Are you Sure you want to Change the Disposition?')){
    $.ajax({
      url: '<?php echo base_url();?>admin/change_wishlist_status',
      method: 'post',
      data: {status:status,wish_id:wish_id},
      success:function(data){
        
       // alert
       alert(data);
       window.location.reload();

      }

    })  

  }
  else{
    return false;
  }


});
    //end wishlist
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
</body>

</html>
