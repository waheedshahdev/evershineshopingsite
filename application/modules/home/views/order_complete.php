		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="<?php echo base_url('/'); ?>">Home</a></span> / <span>Purchase Complete</span></p>
					</div>
				</div>
			</div>
		</div>

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
		<div class="colorlib-product">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-10 offset-sm-1 text-center">
						<p class="icon-addcart"><span><i class="icon-check"></i></span></p>
						<h2 class="mb-4">Thank you for purchasing, Your order is complete <br> For More Information please check your email or go to your account!</h2>
						<p style="margin-top:300px;">
							<a href="<?php echo base_url('/'); ?>"class="btn btn-primary btn-outline-primary">Home</a>
							<a href="<?php echo base_url('home/products'); ?>"class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
						</p>
					</div>
				</div>
			</div>
		</div>