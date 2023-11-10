<?php
class Home extends MX_Controller 
{

	function __construct() {
		parent::__construct();
	}


	public function show_categories()
	{
		$data =  get_query_data('SELECT * FROM tbl_product_category where status = "Active" ORDER BY created_at DESC');
			

		return $data;
	}
public function isMobileDevice() {
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $mobileKeywords = array(
        'android', 'webos', 'iphone', 'ipad',
        'ipod', 'blackberry', 'iemobile', 'opera mini'
    );
    
    foreach ($mobileKeywords as $keyword) {
        if (stripos($userAgent, $keyword) !== false) {
            return true; // Mobile device detected
        }
    }
    
    return false; // Not a mobile device
}



	public function index()
	{	

	
		if ($this->isMobileDevice()) {
			    $carousal = "owl-carousel2";
			    $bestsellcarousal = "owl-carousel2";
			    $categorycarousal = "owl-carousel2";
			    $slider1 = "m-slider1.jpg";
			    $slider2 = "m-slider2.jpg";
			    $slider3 = "m-slider3.jpeg";
			} else {
				$slider1 = 'slider-1.jpg';
				$slider2 = 'slider-2.jpg';
				$slider3 = 'slider-3.jpg';
			    $carousal = "owl-carousel4";
			    $bestsellcarousal = "owl-carousel5";
			    $categorycarousal = "owl-carousel4";
			}


    
    // return false; // Not a mobile device

		$data = array(
			'slider1'			=> $slider1,
			'slider2'			=> $slider2,
			'slider3'			=> $slider3,
			'carousal'			=> $carousal,
		    'bestsellcarousal'			=> $bestsellcarousal,
		    'categorycarousal'			=> $categorycarousal,
			'categories' 		=> get_query_data('SELECT * FROM tbl_product_category where status = "Active" ORDER BY 	category_name ASC'),
			'latest'		=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_product_info.product_area = "Latest" ORDER BY rand() LIMIT 7'),
			'new_arrival'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_product_info.product_area = "New Arrival" ORDER BY rand() LIMIT 10'),
			'rand_product_2'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active"  ORDER BY rand() LIMIT 8'),
			'bestseller'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_product_info.product_area = "BestSeller" ORDER BY rand() LIMIT 7'),
			'featured'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products  JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_product_info.product_area = "Featured" and customer_retail_price_new != 0 ORDER BY rand() LIMIT 10')
		);
		$data['view_module'] = "home";
		$data['view_files'] = "index";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}
public function image_config($path_name){

                $path ='./'.$path_name.'/';
                $config['upload_path']          = $path;
                $config['allowed_types']        = 'gif|jpg|jpeg|png|mov|mpeg|zip';
                $config['max_size']             = 555550000000;
                $config['max_width']            = 555550000000;
                $config['max_height']           = 555550000000;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

}
	public function product_details($product_id="",$p_info_id="")
	{

		$review_submit = $this->input->post('submit_review');
		if($review_submit == 'Submit Review'){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$review = $this->input->post('review');
			$rating = $this->input->post('rating');


			$review_data = array(
					'product_id' => $product_id,
					'customer_name' => $name,
					'customer_email' => $email,
					'customer_type' => 'Customer',
					'review' => $review,
					'rating' => $rating,
			);
			$review_result_id = save_data('tbl_review', $review_data);


           if($result_set)
                    {
                        $this->session->set_flashdata('success', 'Thanks for Your Review!');
                        redirect('home/product_details/'.$product_id.'/'.$p_info_id);

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! your review is not added Due to Error.');
                        redirect('home/product_details/'.$product_id.'/'.$p_info_id);
                    }




		}


$this->load->library('cart');
if ($this->isMobileDevice()) {
			    $popular = "owl-carousel2";
			} else {

			    $popular = "owl-carousel4";
			}
		
	 
		$data = array(	
			'popular' => $popular,
			'rand_product_2'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active"  ORDER BY rand() LIMIT 6'),
			'total_reviews' =>  get_total('id', 'tbl_review', 'product_id = '.$product_id.''),
                   
            'rating' => get_query_data('SELECT * FROM `tbl_review` as R 
                                                where R.product_id = '.$product_id.' order by created_at DESC'),
            'cart_data' => $this->cart->contents(),
            'product_detail' => get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products
			 										JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id 
			 										JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id WHERE tbl_products.product_id='.$product_id.' and tbl_product_info.product_status = "Active"'),
            'sizes' => get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' and p_info_id = '.$p_info_id.' and quantity != total_sold'),
            'categories' => $this->show_categories()

		);
		$data['title'] = 'Product Details';
		$data['view_module'] = "home";
		$data['view_files'] = "product_details";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}

/////////// Cart Code HERE ///////////////

	public function cart()
	{
		$this->load->library('cart');
		$get_delivery_price = get_query_data('SELECT delivery_price FROM tbl_delivery_price');

		$size = $this->input->post('size_id');
		$get_size = explode(',', $size);
	    $size_id = $get_size[0];
	    $size_name = $get_size[1];
		$data = array(
			'id' => rand(00000000,99999999),
			'product_id' => $this->input->post('product_id'),
			'qty' => $this->input->post('quantity'),
			'name' => $this->input->post('product_name'),
			'price' => $this->input->post('size_price'),
			'product_image' => $this->input->post('product_image'),
			'discount_coupon' => $this->input->post('discount_coupon'),
			'discount_amount' => $this->input->post('discount_amount'),
			'delivery_price' => $get_delivery_price[0]->delivery_price,
			'delivery_coupon' => $this->input->post('delivery_coupon'),
			// 'size_price' => $this->input->post('size_price'),
			'size_id' => $size_id,
			'size_name' => $size_name,
			'p_info_id' => $this->input->post('p_info_id'),
			'color' => $this->input->post('color'),

		);
	//print_r($data);
	//save_data('tbl_cart_detail', $data);
		$this->cart->insert($data);

	// print_r($this->cart->contents());
	// exit();
	//echo $this->view();
		// below code is only for header menu

		if ($this->isMobileDevice()) {
			    $bestsellcarousal = "owl-carousel2";
			} else {

			    $bestsellcarousal = "owl-carousel5";
			}

		$data = array(
		    'bestsellcarousal'			=> $bestsellcarousal,
			'categories' 		=> $this->show_categories(),
			'rand_product_2'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active"  ORDER BY rand() LIMIT 8')
		);



		$data['cart_data'] = $this->cart->contents();
		$data['view_module'] = "home";
		$data['view_files'] = "cart";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}

	

	public function remove_cart_item($id)
	{

		$data = array(

			'rowid' => $id,
			'qty' => 0
		);
		$this->load->library('cart');
		$this->cart->update($data);
		redirect('home/cart');

	}


	public function fetch_size_price()
{
    $size = $this->input->post('size');
    $product_id = $this->input->post('product_id');

    $get_size = explode(',', $size);

    $size_id = $get_size[0];
    $size_name = $get_size[1];


        $data = get_query_data('SELECT size_price FROM tbl_product_sizes where product_id = '.$product_id.' and size = "'.$size_name.'" order by created_at DESC');
        foreach ($data as $client) 
        {
            

    }
$output .= $client->size_price;
    // print_r($output);
    // exit();
    echo $output;
}

	public function fetch_stock()
{
    $size = $this->input->post('size');
    $product_id = $this->input->post('product_id');

    $get_size = explode(',', $size);

    $size_id = $get_size[0];
    $size_name = $get_size[1];


        $data = get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' and size = "'.$size_name.'" order by created_at DESC');
        foreach ($data as $client) 
        {
        	$qty = $client->quantity;
        	$sold = $client->total_sold;
        	
        	$total_q = $qty - $sold;
           
            
    }
    if($sold < $qty ){
        		 $output .= '<span style="color:green;" data-qty_check="'.$total_q.'"> '.$total_q.' in Stock</span>';
        		 $output .= '<input type="hidden" id="qty_check" value="'.$total_q.'">';
        	}
        	elseif ($sold >= $qty) {
        		 $output .= '<span style="color:red;">Not Available in Stock</span>';
        	}

    // print_r($output);
    // exit();
    echo $output;
}

/////////// END cart Code ///////////////

	public function login($direciton="")
	{
		$direction_id = decode_id($direciton);

		$data = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "login";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	} 
	
	public function forget_password()
	{
		$forget = $this->input->post('forget');
		$change_password = $this->input->post('change_password');

		if($forget == 'Submit')
		{
			$email = $this->input->post('email');
			$get_email = select_columns('email','tbl_customers', 'email="'.$email.'"');
			if(empty($get_email)){
				echo 'Email Not Found';
				$this->session->set_flashdata('error_msg', 'Sorry! Email not found. Please try again or Register first!');
				redirect('home/forget_password');
			}
			else{
				echo 'email found';
				$token = rand(0000000,9999999);
				echo $token;

				$data = array(
							'token' => $token,
				);

				update_data_by_where('tbl_customers', $data, 'email = "'.$get_email[0]->email.'"');
				$subject = 'Forget Passowrd';
				$link = base_url('home/forget_password/'.encode_id($token).'/'.encode_id($get_email[0]->email).'');
				$message = 'Dear Customer,';
				$message .= 'Please click on the link to recover your password: '.$link.'';
				sendMail($get_email[0]->email, $subject, $message);

				$this->session->set_flashdata('success', 'We have sent you an email. Please check your email to recover your passowrd!');
				redirect('home/forget_password');

			}
		
			
		}
		if($change_password == 'Change Password'){
			$seg3 = $this->input->post('seg3');
			$seg4 = $this->input->post('seg4');
			$token = decode_id($seg3);
			$decode_email = decode_id($seg4);
			$verify = select_columns('email','tbl_customers', 'token = "'.$token.'" and email="'.$decode_email.'"');
			if(empty($verify)){
				$this->session->set_flashdata('error_msg', 'Sorry! Something went wrong. Please try again');
				redirect('home/forget_password');
			}
			else{
				$new_password = $this->input->post('new_password');
				$confirm_new_password = $this->input->post('confirm_new_password');
				if($new_password == $confirm_new_password)
				{
					$pass_change = array(
										'password' => md5($new_password)
					);
					update_data_by_where('tbl_customers', $pass_change, 'token = "'.$token.'" and email="'.$decode_email.'"');
					$this->session->set_flashdata('success', 'Success! Your Password has been Changed! Please login with your New Passowrd');
					redirect('home/login');
				}	
				else{
					$this->session->set_flashdata('error_msg', 'Sorry! New Password and Confirm Password Not Matched. Please try again.');
					redirect('home/forget_password/'.$seg3.'/'.$seg4.'');
				}

			}

		}

						

		$data = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "forget_password";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}

	public function register()
	{
		// $this->load->view('register');
		$data = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "register";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}
	
	public function Orderlist() 
	{
		$data['view_module'] = "home";
		$data['view_files'] = "orderlist";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}

//////////// Checkout Page /////////////
		public function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyz';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function checkout()
	{
		$user_type = $this->session->userdata('customer_id');
		$this->load->library('cart');
		$cart_data = $this->cart->contents();
		if(empty($cart_data)){

			$this->session->set_flashdata('error_msg', 'Your Cart is Empty.');

			redirect('home','refresh');

		}
		if(!empty($user_type)){
			$customer_id = $this->session->userdata('customer_id');

			
			$submit = $this->input->post('proceed');
			if($submit == 'Confirm Order')
			{

			$cart_data = $this->cart->contents();
			// print_r($cart_data);
			// exit();
			$customer_id = $this->session->userdata('customer_id');
			$customer_email = $this->session->userdata('customer_email');
			$data = array(
				'customer_id' => $customer_id,
				'promo_id' => $this->input->post('promo_id'),
				'promo_discount' => $this->input->post('promo_discount'),
				'delivery_price' => $this->input->post('delivery_price'),
				'delivery_coupon' => $this->input->post('delivery_coupon'),
				'sub_total' => $this->input->post('subtotal'),
				'order_grand_total' => $this->input->post('order_grand_total'),
				'comment_about_order' => $this->input->post('comment_about_order'),
				'order_payment_method' => $this->input->post('payment_method'),
				'terms_check' => $this->input->post('terms_check'),
				'tracking_id' =>  $this->generateRandomString()   
			);
			

			$result = save_data('tbl_order',$data);
			if($result){

				foreach ($cart_data as $values) {
					$cart_items = array(
						'product_id' => $values['product_id'],
						'p_info_id' => $values['p_info_id'],
						'size_id' => $values['size_id'],
						'size_name' => $values['size_name'],
						'color' => $values['color'],
						'product_quantity' => $values['qty'],
						'order_id' => $result,
					);
					$quantity = $values['qty'];
					
				$sql_query = 'UPDATE tbl_product_sizes SET total_sold = total_sold + '.$quantity.' where id = '.$values['size_id'].'';

		
					execute_query($sql_query);

					$order_added = save_data('tbl_order_detail', $cart_items);
				}
				$this->cart->destroy();
				$subject = 'Evershinepk Order Status';
				$data['order_data'] = get_query_data('SELECT * FROM tbl_order where id = '.$result.'');
				$data['order_detail'] = get_query_data('SELECT P.product_id,P.product_name,P.category_id,P.sub_image,
														I.customer_retail_price,I.customer_retail_price_new,I.brand,
														C.category_name, S.size,S.color,O.product_quantity, S.size_price
														FROM `tbl_order_detail` as O
														JOIN tbl_products as P on P.product_id = O.product_id 
														JOIN tbl_product_info as I on I.id = O.p_info_id 
														JOIN tbl_product_category as C on C.id = P.category_id
														JOIN tbl_product_sizes as S on S.id = O.size_id
														where order_id = '.$result.'');

				
				$message = $this->load->view('email/order_email', $data, TRUE);
				$o_email = 'evershine714@gmail.com';
				sendMail($customer_email, $subject, $message, $cc_to);
				sendMail($o_email, $subject, $message);
			
				$this->session->set_flashdata('success', 'Order Placed Successfully.');
				redirect('home/order_complete');


			}else{
				$this->session->set_flashdata('error_msg', 'Sorry! Order Not Placed Due to Error.');
				redirect('home/checkout');

			} 
			}





			$data = $this->show_categories();
			$data['customer_data'] = get_query_data('SELECT * FROM tbl_customers WHERE customer_id = '.$customer_id.'');
			$data['cart_data'] = $this->cart->contents();
			$data['view_module'] = "home";
			$data['view_files'] = "checkout";
			$this->load->module("templates");
			$this->templates->public_bootstrap($data);
		}
		else{
			$this->session->set_flashdata('error_msg', 'Please! Login or Register.');
			redirect('home/login');
		}

	}

	public function order_complete()
	{
			$data['view_module'] = "home";
			$data['view_files'] = "order_complete";
			$this->load->module("templates");
			$this->templates->public_bootstrap($data);
	}

	public function update_quantity($cart_id)
	{

		$data = array(

			'rowid' => $cart_id,
			'qty' => $this->input->post('quantity'),
		);
		$this->load->library('cart');
		$this->cart->update($data);
		redirect('home/cart');

	}

///////////// End checkout Page ///////////

	public function customer_auth($direction="")
	{

		$direction_id = decode_id($direction);
	

		$submit = $this->input->post('login');
		if($submit == 'Login'){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			if($email=="" || $password=="" ){   
				$this->session->set_flashdata('error_msg', 'Username or Password is empty. Please try again!');
				redirect(base_url().'home/checkout');    
			}

			$user_login = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);

		
			$this->load->model('mdl_home');
			$data = $this->mdl_home->validate_credentials($user_login['email'],$user_login['password']);
			if($data)
			{
				$this->session->set_userdata('id',$data['id']);
				$this->session->set_userdata('customer_id',$data['customer_id']);
				$this->session->set_userdata('customer_email',$data['email']);
				$this->session->set_userdata('customer_first_name',$data['first_name']);
				if($this->uri->segment(3) == 'customer_dashboard'){
					echo 'i m here';
					exit();
				}
				else{
				if($direction_id == 1)
				{
					redirect('home/myaccount');	

				}
				else{
					redirect('home/checkout');	
				}
				}
				
			}
			else
			{
				$this->session->set_flashdata('error_msg', 'Your Email address is not found. Please register first.');
				redirect('home/login/'.$direction.'');
			}


		}
		elseif ($submit == 'Register') {
			$email = $this->input->post('email');
			$where = 'email = "'.$email.'"';
			$find_email = select_data('tbl_customers', $where);
			if($find_email[0]->email == $email){
				$this->session->set_flashdata('error_msg', 'Sorry! You are Already Registered Please Login.');
				redirect('home/login');
			}
			else{

				$password = $this->input->post('password');
				$confirm_password = $this->input->post('confirm_password');

				if($password != $confirm_password)
				{
					$this->session->set_flashdata('error_msg', 'Sorry! Your password is not matched. please try again');
					redirect('home/register');
				}

				$cus_id = rand(000000,999999);
				$data = array(
					'customer_id' => $cus_id,
					'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'phone' => $this->input->post('phone'),
					'email' => $email,
					'password' => md5($password)
				);
				$register_customer = save_data('tbl_customers', $data);
				if($register_customer)
				{
					$this->session->set_flashdata('success', 'You are Successfully Register, Please Continue our shopping.');
					$this->session->set_userdata('id',$register_customer);
					$this->session->set_userdata('customer_id',$cus_id);
					$this->session->set_userdata('customer_email',$email);
					// $this->session->set_userdata('first_name',$data['first_name']);
					if($this->uri->segment(3) == 'customer_dashboard'){
					echo 'i m here';
					exit();
				}
				else{

				redirect('home/checkout');	
				}
					// redirect('home/checkout');
				}
				else{
					$this->session->set_flashdata('error_msg', 'Sorry! You are not Registered Please try again.');
					redirect('home/checkout');
				}
			}
		}

		$data = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "login";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);
	}

public function logout()
{

	$array_items = array('id' => '', 'customer_id' => '', 'customer_email' => '', 'first_name' => '');

	$this->session->unset_userdata('id');
	$this->session->unset_userdata('customer_id');
	$this->session->unset_userdata('customer_email');
	$this->session->unset_userdata('first_name');

	
    // $this->session->sess_destroy();
      redirect('home/login', 'refresh');
}


////////// Fetch Product Data for Modal //////////////

	public function fetch_product_data()
	{

		$id = $this->input->post('id');
		$result = get_query_data('SELECT * FROM tbl_products join tbl_product_info on tbl_product_info.product_id = tbl_products.product_id WHERE tbl_products.product_id = '.$id.'');
		echo json_encode($result);

	}
///////// END product Data

///////// shipping info /////////////////

	public function update_customer_shipping()
	{
		$user_type = $this->session->userdata('id');

		if(!empty($user_type)){
			$customer_id = $this->session->userdata('customer_id');


			$shipping_data1 = array(
				'first_name'	=>	$this->input->post('first_name'),
				'last_name'		=>	$this->input->post('last_name'),
				'email'			=>	$this->input->post('email'),
				'phone'			=>	$this->input->post('phone'),
				'city'			=>	$this->input->post('city'),
				'postal_code'			=>	$this->input->post('postal_code'),
				'street_address'=>	$this->input->post('street_address'),
				'note'=>	$this->input->post('note'),
			);


			$submit = $this->input->post('shipping_info');
			if ($submit == 'Save Shipping Info') {


				$where = 'customer_id = "'.$customer_id.'"';

					$update_info1 = update_data_by_where('tbl_customers', $shipping_data1, $where);

					if($update_info1)
					{
						$this->session->set_flashdata('error_msg', 'Sorry! Your Shipping Info Not Updated Successfully.');
						redirect('home/checkout');
					}
					else{
						
						
						$this->session->set_flashdata('success', 'Your Shipping Info Updated Successfully.');

						redirect('home/checkout');
					}


				
				
			}
			


		}
		else{
			// $this->session->set_flashdata('error_msg', 'Please! Login First.');
			redirect('home/login');
		}

	}
//////// END shipping Info /////////////

//////////  products  /////////////

	public function products($category_id="",$sub_cat_id="")
	{

		

		//$data['cart_data'] = $this->cart->contents();
		if($sub_cat_id == '' && $category_id != ''){
			$data['product_by_category'] = get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_products.category_id = '.$category_id.' ORDER BY rand() DESC LIMIT 50');
			
		}
		elseif ($category_id == '' && $sub_cat_id == '') {
			$data['product_by_category'] = get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" ORDER BY rand() DESC LIMIT 50');
		}
		elseif ($sub_cat_id != '' && $category_id != '') {
			$data['product_by_category'] = get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and category_id = '.$category_id.' and sub_cat_id = '.$sub_cat_id.' ORDER BY tbl_products.created_at DESC LIMIT 50');
		}
		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "products";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}


///////// END Products ///////////////

	//////////  sub_category  /////////////

	public function subCategory($category_id="")
	{
		if ($this->isMobileDevice()) {
			    $carousal = "owl-carousel2";
			} else {
			    $carousal = "owl-carousel4";
			}

	
		$data = array(
			'carousal'			=> $carousal,
			'sub_categories' 		=> get_query_data('SELECT * FROM tbl_sub_category where category_id = '.$category_id.' and status = "Active" ORDER BY 						created_at DESC'),
			'rand_product_2'	=> get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and tbl_products.category_id = '.$category_id.' ORDER BY rand() DESC LIMIT 50'),
		);
		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "sub_category";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}


///////// END sub_category ///////////////
//////////  categories  /////////////

	public function categories()
	{

	
		$data = array(
			'categories' 		=> get_query_data('SELECT * FROM tbl_product_category where status = "Active" ORDER BY 						created_at DESC'),
		);
		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "categories";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}


///////// END categories ///////////////

	////////// News Letter ///////////
		public function  signup_newsletter()
	{

		$submit = $this->input->post('subscribe');
		if($submit == 'Subscribe')
		{
			$email = $this->input->post('email');
			$where = 'newsletter_email = "'.$email.'"';
			$fetch_email = select_columns('newsletter_email','tbl_newsletter', $where);
			if($fetch_email[0]->newsletter_email == $email)
			{
				$this->session->set_flashdata('error_msg', 'You Already subscribe For News Letter.');
				redirect('home');
			}
			else{
			$get_email = array(
					'newsletter_email' => $email
			);
			$result = save_data('tbl_newsletter', $get_email);
			if($result)
			{
				$this->session->set_flashdata('success', 'You Subscribed For News Letter Successfully.');
				redirect('home');
			}
			else{
				$this->session->set_flashdata('error_msg', 'Something wents wrong.');
				redirect('home');
			}
			}
		}
	}

	/////////// END news letter ///////
	public function contact()
	{

		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "contact";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}

		public function page_not_found()
	{

		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "404_page";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}

	public function about()
	{

		if ($this->isMobileDevice()) {
			    $aboutus = "m-aboutus.jpg";
			} else {
				$aboutus = 'aboutus.jpg';
			}

		$data['bg_img'] = $aboutus;
		$data['categories'] = $this->show_categories();
		$data['view_module'] = "home";
		$data['view_files'] = "about";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}


		public function discount_coupon($rowid="")
	{


		$this->load->library('cart');
		$submit = $this->input->post('submit');
		if($submit == 'Apply Coupon'){



		$coupon = $this->input->post('coupon');
		$where = 'discount_coupon = "'.$coupon.'"';
		$fetch_coupon = select_columns('discount_coupon,discount_amount,status','tbl_discount_coupon', $where);
		if($fetch_coupon[0]->discount_coupon == $coupon)
		{
			if($fetch_coupon[0]->status == 'Active'){

				$data = array(
						'rowid' =>$rowid,
						'discount_coupon' => $coupon,
						'discount_amount' => $fetch_coupon[0]->discount_amount,
				);	


				// print_r($data);
				// exit();
				$cart_data = $this->cart->contents();
				foreach ($cart_data as $cart) {
					# code...
				}
				if($cart['discount_coupon'] != ''){
					$this->session->set_flashdata('error_msg', 'Coupon Already Added to Cart.');
					redirect('home/cart');
				}
				else{
					$update_cart = $this->cart->update($data);
				if($update_cart)
				{
					$this->session->set_flashdata('success', 'Coupon Added Successfully.');
				redirect('home/cart');
				}
				}

				

			}
			elseif ($fetch_coupon[0]->status == 'Expire') {
				$this->session->set_flashdata('error_msg', 'Coupon is Expired Better Luck Next Time.');
				redirect('home/cart');
			}

		}
		else{
			$this->session->set_flashdata('error_msg', 'Coupon is Incorrect Please Enter Correct Coupon.');
				redirect('home/cart');
		}
		

	//print_r($data);
	//save_data('tbl_cart_detail', $data);
		// $this->cart->insert($data);
}
	// print_r($this->cart->contents());
	// exit();
	//echo $this->view();
		// below code is only for header menu


	}

public function remove_discount_coupon($rowid="")
{
	$this->load->library('cart');
	$data = array(
			'rowid'			=> $rowid,
			'discount_coupon' => '',
			'discount_amount' => ''
	);
		$update_cart = $this->cart->update($data);
				if($update_cart)
				{
					$this->session->set_flashdata('success', 'Coupon Removed Successfully.');
				redirect('home/cart');
				}

}

// Delivery_coupon
		public function delivery_coupon($rowid="")
	{


		$this->load->library('cart');
		$submit = $this->input->post('submit');
		if($submit == 'Apply Coupon'){



		$coupon = $this->input->post('delivery_coupon');
		$where = 'delivery_coupon = "'.$coupon.'"';
		$fetch_coupon = select_columns('delivery_coupon,delivery_status,status','tbl_delivery_coupon', $where);
		if($fetch_coupon[0]->delivery_coupon == $coupon)
		{
			if($fetch_coupon[0]->status == 'Active'){

				$data = array(
						'rowid' =>$rowid,
						'delivery_coupon' => $coupon,
						'delivery_price' => $fetch_coupon[0]->delivery_status,
				);	


				// print_r($data);
				// exit();
				$cart_data = $this->cart->contents();
				foreach ($cart_data as $cart) {
					# code...
				}
				if($cart['delivery_coupon'] != ''){
					$this->session->set_flashdata('error_msg', 'Coupon Already Added to Cart.');
					redirect('home/cart');
				}
				else{
					$update_cart = $this->cart->update($data);
				if($update_cart)
				{
					$this->session->set_flashdata('success', 'Coupon Added Successfully.');
				redirect('home/cart');
				}
				}

				

			}
			elseif ($fetch_coupon[0]->status == 'Expire') {
				$this->session->set_flashdata('error_msg', 'Coupon is Expired Better Luck Next Time.');
				redirect('home/cart');
			}

		}
		else{
			$this->session->set_flashdata('error_msg', 'Coupon is Incorrect Please Enter Correct Coupon.');
				redirect('home/cart');
		}
		
}


	}
	public function remove_delivery_coupon($rowid="")
{
	$this->load->library('cart');
	$get_delivery_price = get_query_data('SELECT * FROM tbl_delivery_price');
	$data = array(
			'rowid'			=> $rowid,
			'delivery_coupon' => '',
			'delivery_price' => $get_delivery_price[0]->delivery_price
	);
		$update_cart = $this->cart->update($data);
				if($update_cart)
				{
					$this->session->set_flashdata('success', 'Coupon Removed Successfully.');
				redirect('home/cart');
				}

}
// END Delivery Coupon


////////////// Search Result ////////////////
public function search_query()
	{
		$search = $this->input->post('search');
		if($search == 'Search')
		{
			$search_query = $this->input->post('search_query');
	
				$search_result = get_query_data('SELECT *,tbl_product_info.id as p_info_id FROM tbl_products JOIN tbl_product_info on tbl_product_info.product_id = tbl_products.product_id where tbl_product_info.product_status = "Active" and product_name LIKE "%'.$search_query.'%" ORDER BY tbl_products.created_at DESC LIMIT 20');

				}
			

		$data = $this->show_categories();
		// $data['products'] = get_query_data('SELECT * FROM tbl_products where category_id = '.$category_id.' ORDER BY created_at DESC LIMIT 20');
		$data['search_products'] = $search_result;
		$data['view_module'] = "home";
		$data['view_files'] = "search_query";
		$this->load->module("templates");
		$this->templates->public_bootstrap($data);

	}

	////////////// END Search Result ////////////////


    ////////////// Order Details ////////////////

    public function orderdetail($id="")
	{
			$data['order_data'] = get_query_data('SELECT * FROM tbl_order where id = '.$id.'');
			$data['order_detail'] = get_query_data('SELECT P.product_id,P.product_name,P.category_id,P.sub_image,
													I.customer_retail_price,I.customer_retail_price_new,I.brand,
													C.category_name, S.size,S.color,O.product_quantity, S.size_price
													FROM `tbl_order_detail` as O
													JOIN tbl_products as P on P.product_id = O.product_id 
													JOIN tbl_product_info as I on I.id = O.p_info_id 
													JOIN tbl_product_category as C on C.id = P.category_id
													JOIN tbl_product_sizes as S on S.id = O.size_id
													where order_id = '.$id.'');
			$data['view_module'] = "home";
			$data['view_files'] = "orderdetail";
			$this->load->module("templates");
			$this->templates->public_bootstrap($data);
		

    }
    
    ////////////// Order Details End here ////////////////


// ////////////Customer Account //////////////////////////

public function myaccount($id="")
	{
		$get_direction = decode_id($id);
		$user_type = $this->session->userdata('customer_id');
		if(!empty($user_type)){
			$update = $this->input->post('update_info');
			$update_shipping_info = $this->input->post('update_shipping_info');
			$update_password = $this->input->post('update_password');
			if($update == 'Update'){

					$data = array(
			            'first_name' => $this->input->post('first_name'),
			            'last_name' => $this->input->post('last_name'),
			            'email' => $this->input->post('email'),
			            'phone' => $this->input->post('phone'),
			            'postal_code' => $this->input->post('postal_code'),
			        );

                    $returnCatValue = update_data_by_where('tbl_customers',$data,'customer_id = '.$user_type.'');
                    if($returnCatValue)
                    {
                        
                        $this->session->set_flashdata('error_msg', 'Sorry! Account Info Updated Not Changed Due to Error.');
                        redirect('home/myaccount');

                    }
                    else
                    {
                        $this->session->set_flashdata('success', 'Account Info Updated Changed Successfully.');
                        redirect('home/myaccount');
                    }

			}

			if($update_shipping_info == 'Update Shipping Address'){

					$data = array(
			            'street_address' => $this->input->post('street_address'),
			            'city' => $this->input->post('city'),
			            'state' => $this->input->post('state'),
			            'postal_code' => $this->input->post('postal_code'),
			        );

                    $returnCatValue = update_data_by_where('tbl_customers',$data,'customer_id = '.$user_type.'');
                    if($returnCatValue)
                    {
                        
                        $this->session->set_flashdata('error_msg', 'Sorry! Account Shipping Address Not Changed Due to Error.');
                        redirect('home/myaccount');

                    }
                    else
                    {
                        $this->session->set_flashdata('success', 'Account Shipping Address Updated Successfully.');
                        redirect('home/myaccount');
                    }

			}

			if($update_password == 'Update Password'){
				$email = $this->session->userdata('customer_email');

				$current_password = $this->input->post('current_password');
				$new_password = $this->input->post('new_password');
				$confirm_password = $this->input->post('confirm_password');
				$where = 'email = "'.$email.'" and password = "'.md5($current_password).'"';
				$find_credentials = select_data('tbl_customers', $where);
			
				if(empty($find_credentials)){
					$this->session->set_flashdata('error_msg', 'Your Password is not correct! please enter correct password.');
					redirect('home/myaccount');
				}
				else{
					if($new_password == $confirm_password){

						$data = array(
			            'password' => md5($new_password)
			        );

                    $returnCatValue = update_data_by_where('tbl_customers',$data,'customer_id = '.$user_type.'');
                    if($returnCatValue)
                    {
                        
                        $this->session->set_flashdata('error_msg', 'Sorry! Your Password is Not Changed Due to Error.');
                        redirect('home/myaccount');

                    }
                    else
                    {
                        $this->session->set_flashdata('success', 'Your password has been Updated Successfully.');
                        redirect('home/myaccount');
                    }


					}
					else{
						$this->session->set_flashdata('error_msg', 'Password Not matched! Please try again');
					redirect('home/myaccount');
					}
				}

					

			}

			$data = $this->show_categories();
			$data['customer_data'] = get_query_data('SELECT * FROM tbl_customers WHERE customer_id = '.$user_type.'');
			$data['customer_shipping_data_2'] = get_query_data('SELECT * FROM tbl_customer_shipping_info WHERE customer_id = '.$user_type.'');
			$data['orders'] = get_query_data('SELECT * FROM tbl_order WHERE customer_id = '.$user_type.'');


			$data['view_module'] = "home";
			$data['view_files'] = "account";
			$this->load->module("templates");
			$this->templates->public_bootstrap($data);
		}
		else{
			// $this->session->set_flashdata('error_msg', 'Please! Login First.');
			redirect('home/login/'.$id.'');
		}

	}



	///////////////////END Customer Account /////////////////

	public function add_to_wishlist()
{
    
        $data = array(
            'product_id' => $this->input->post('product_id'),
            'customer_id' => $this->session->userdata('customer_id'),
            'list_from' => 'Customer',
        );

        save_data('tbl_wishlist',$data);

}


}