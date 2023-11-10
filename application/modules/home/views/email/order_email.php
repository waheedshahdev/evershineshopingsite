<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

<!-- header -->



          


 <table style="border-collapse: collapse;width:100%; border-left: 1px solid lightgray;border-right: 1px solid lightgray;">
    <tr>
        <th style="text-align: left;width:7%;padding-left: 20px;padding-top:15px;">
         <!--  <h3 style="margin-top:5px;margin: 5px 0;font-weight: normal;"><strong style="color: gray;">From: </strong><?php //echo $result[0]->username; ?></strong> <span><a href="">(<?php echo $result[0]->email; ?>)</h3> -->
        </th>
    
    </tr>
</table>



<!-- date column -->

<table style="width: 100%; padding-bottom: 15px; border-left: 1px solid lightgray;border-right: 1px solid lightgray;">
    <thead>
    <tr>
        <!-- <th style="text-align: left;padding-left: 20px;padding-top: 25px;">
  
        </th> -->
        <th>Image</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Size</th>
        <th>Unit price</th>
        <th>Ref No</th>
    </tr>
    </thead>
    <tbody>
      <?php foreach ($order_detail as $value):?>
      <tr>
        <td><img src="<?php echo base_url('product_images/'.$value->sub_image.''); ?>" style="width: 50px; height: 50px;"></td>
        <td><?php echo $value->product_name; ?></td>
        <td><?php echo $value->product_quantity; ?></td>
        <td><?php echo $value->size; ?></td>
        <td><?php echo $value->size_price; ?></td>
        <td><?php echo $value->product_id; ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" style="text-align: left;">Order ID:</th>
      <th scope="col" style="text-align: left;"> <?php echo $order_data[0]->tracking_id; ?></th>
      
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="col" style="text-align: left;">Sub Total:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->sub_total; ?> </th>
      
    </tr>
    <tr>
      <th scope="col" style="text-align: left;">Grand Total:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->order_grand_total; ?></th>
      
    </tr>

    <tr>
      <th scope="col" style="text-align: left;">Promo Discount:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->promo_discount; ?></th>
      
    </tr>
     <tr>
      <th scope="col" style="text-align: left;">Payment Method:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->order_payment_method; ?></th>
      
    </tr>
     <tr>
      <th scope="col" style="text-align: left;">Order Status:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->order_status; ?></th>
      
    </tr>
     <tr>
      <th scope="col" style="text-align: left;">Estimated Delivery Date:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->delivery_date; ?></th>
      
    </tr>
     <tr>
      <th scope="col" style="text-align: left;">Comment:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->comment_about_order; ?></th>
      
    </tr>
 
    <tr>
      <th scope="col" style="text-align: left;">Tracking #:</th>
      <th scope="col" style="text-align: left;"><?php echo $order_data[0]->tracking_id; ?></th>
      
    </tr>

 
  </tbody>
</table>


<!-- footer -->



<table class="text-right" style="float: right;width: 100%;background: lightgray;">
  <tr>
    <th>
      <h5 style="color: #005b9d;margin: 10px;"><span style="color: red;">All rights reserved 2023.</span> Evershinepk
      </h5>
    </th>
  </tr>
</table>


<hr style="margin-top: -2px;margin-bottom: 0;">

</div>


  
</body>
</html>