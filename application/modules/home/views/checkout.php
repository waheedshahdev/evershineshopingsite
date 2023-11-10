    <div class="main">
      <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="">Store</a></li>
            <li class="active">Checkout</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
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
        <div class="row margin-bottom-40">
          <!-- BEGIN CONTENT -->
          <div class="col-md-12 col-sm-12">
            <h1>Checkout</h1>
            <!-- BEGIN CHECKOUT PAGE -->
            <div class="panel-group checkout-page accordion scrollable" id="checkout-page">


              <!-- BEGIN PAYMENT ADDRESS -->
              <div id="payment-address" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#payment-address-content" class="accordion-toggle">
                      Step 2: Shipping &amp; Billing Details
                    </a>
                  </h2>
                </div>
                <div >
                  <form action="<?php echo base_url('home/update_customer_shipping'); ?>" method="POST">
                  <div class="panel-body row">
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Shipping Details</h3>
                      <div class="form-group">
                        <label for="firstname">First Name <span class="require">*</span></label>
                        <input type="text" id="firstname" class="form-control" name="first_name" required="required" value="<?php echo $customer_data[0]->first_name; ?>">
                      </div>
                      <div class="form-group">
                        <label for="lastname">Last Name <span class="require">*</span></label>
                        <input type="text" id="lastname" class="form-control" name="last_name" value="<?php echo $customer_data[0]->last_name; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="email">E-Mail <span class="require">*</span></label>
                        <input type="text" id="email" class="form-control" name="email" value="<?php echo $customer_data[0]->email; ?>">
                      </div>
                      <div class="form-group">
                        <label for="telephone">Mobile Number <span class="require">*</span></label>
                        <input type="text" id="telephone" class="form-control" name="phone" value="<?php echo $customer_data[0]->phone; ?>">
                      </div>
                      

                    </div>
                    <div class="col-md-6 col-sm-6">
                      <h3>Your Address</h3>
                      
                      <div class="form-group">
                        <label for="address1">Address</label>
                        <textarea  type="text" class="form-control" name="street_address" cols="5" rows="5" required><?php echo $customer_data[0]->street_address; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="city">City <span class="require">*</span></label>
                        <input type="text" id="city" class="form-control" name="city" value="<?php echo $customer_data[0]->city; ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="post-code">Post Code <span class="require">*</span></label>
                        <input type="text" id="post-code" class="form-control" name="postal_code" value="<?php echo $customer_data[0]->postal_code; ?>" required>
                      </div>
                      
                     
                    </div>
                    <hr>
                    <div class="col-md-12">                      
                     
                      <input type="submit" name="shipping_info" class=" btn btn-primary pull-right" value="Save Shipping Info">
                      <div class="checkbox pull-right">
                        
                      </div>                        
                    </div>

                  </div>
                  </form>

                </div>
              </div>
              <!-- END PAYMENT ADDRESS -->




              <!-- BEGIN CONFIRM -->
              <div id="confirm" class="panel panel-default">
                <div class="panel-heading">
                  <h2 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-page" href="#confirm-content" class="accordion-toggle">
                      Step 6: Confirm Order
                    </a>
                  </h2>
                </div>
                <div >
                  <div class="panel-body row">
                    <div class="col-md-12 clearfix">
                      <div class="table-wrapper-responsive">
                      <table>
                        <tr>
                          <th class="checkout-image">Image</th>
                          <th class="checkout-quantity">Quantity</th>
                          <th class="checkout-price">Price</th>
                          <th class="checkout-description">Description</th>
                          <th class="checkout-model">Model</th>
                          <th class="checkout-total">Total</th>
                        </tr>
                        <?php foreach ($cart_data as $cart):?>
                        <tr>
                          <td class="checkout-image">
                            <a href="javascript:;"><img src="<?php echo base_url($cart['product_image']); ?>" alt="<?php echo $cart['name']; ?>"></a>
                          </td>
                          <td class="checkout-quantity"><?php echo $cart['qty']; ?></td>
                          <td class="checkout-price"><strong><span>RS</span> <?php echo $cart['price']; ?>.00</strong></td>
                          <td class="checkout-description">
                            <h3><a href="javascript:;"><?php echo $cart['name']; ?></a></h3>
                            <p><strong>Item 1</strong> - Color: <?php echo $cart['color']; ?>; Size: <?php echo $cart['size_name']; ?></p>
                          </td>
                          <td class="checkout-model"><?php echo $cart['product_id']; ?></td>
                          
                          <td class="checkout-total"><strong><span>RS</span> <?php echo $cart['subtotal']; ?>.00</strong></td>
                        </tr>
                        <?php endforeach; ?>
                      </table>
                      </div>
                      <div class="checkout-total-block">
                        <ul>
                          <li>
                            <em>Sub total</em>
                            <strong class="price"><span>Rs</span> <?php echo $cart['subtotal']; ?>.00</strong>
                          </li>
                          <li>
                            <em>Shipping cost</em>
                            <strong class="price"><span>Free</span></strong>
                          </li>
                         
                          <li class="checkout-total-price">
                            <em>Total</em>
                            <strong class="price"><span>Rs</span> <?php
                                                $total = $this->cart->total();
                                                $coupon = $cart['discount_coupon'];
                                                $amount = $cart['discount_amount'];
                                                $get_discounted_amount = $total / 100 * $amount;
                                                $delivery_price = $cart['delivery_price'];
                                                if($delivery_price !='Free'){
                                                    $delivery = $delivery_price;
                                                }
                                                else{
                                                    $delivery = 0;
                                                }
                                                if($coupon == ''){
                                                    echo $total;
                                                }elseif ($coupon != '') {
                                                    $total = round($total - $get_discounted_amount + $delivery,0);
                                                    echo $total;
                                                }
                                              ?>.00</strong>
                          </li>
                        </ul>
                      </div>
                      <div class="clearfix"></div>

                      <form action="<?php echo base_url('home/checkout'); ?>" method="POST">
                      <div class="col-md-12">
                      <p>Please select the preferred payment method to use on this order.</p>
                      <div class="radio-list">
                        <label>
                          <input type="radio" value="Cash on Delivery" name="payment_method"> Cash On Delivery
                        </label>
                      </div>
                      <div class="form-group">
                        <label for="delivery-payment-method">Add Comments About Your Order</label>
                        <textarea id="delivery-payment-method" rows="8" class="form-control" name="comment_about_order"></textarea>
                      </div>
                      <input type="hidden" name="subtotal" value="<?php echo $cart['subtotal']; ?>">
                                <input type="hidden" name="promo_id" value="<?php echo $cart['discount_coupon']; ?>">
                                <input type="hidden" name="promo_discount" value="<?php echo $cart['discount_amount']; ?>">
                                <input type="hidden" name="delivery_price" value="<?php echo $cart['delivery_price']; ?>">
                                <input type="hidden" name="delivery_coupon" value="<?php echo $cart['delivery_coupon']; ?>">
                                <input type="hidden" name="order_grand_total" value="<?php 
                                                $total = $this->cart->total();
                                                $coupon = $cart['discount_coupon'];
                                                $amount = $cart['discount_amount'];
                                                $get_discounted_amount = $total / 100 * $amount;
                                                $delivery_price = $cart['delivery_price'];
                                                if($delivery_price !='Free'){
                                                    $delivery = $delivery_price;
                                                }
                                                else{
                                                    $delivery = 0;
                                                }
                                                if($coupon == ''){
                                                    echo $total;
                                                }elseif ($coupon != '') {
                                                    $total = round($total - $get_discounted_amount + $delivery,0);
                                                    echo $total;
                                                } ?>">
              
                    
                    </div>

                      <input type="submit" name="proceed" class="btn btn-primary pull-right" id="button_confirm" value="Confirm Order">
                      <button type="button" class="btn btn-default pull-right margin-right-20">Cancel</button>

                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- END CONFIRM -->
            </div>
            <!-- END CHECKOUT PAGE -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
