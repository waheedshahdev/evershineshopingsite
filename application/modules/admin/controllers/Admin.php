<?php
class Admin extends MX_Controller 
{

function __construct() {
parent::__construct();
}

public function index()
{

    // this is test for GitHUB
    // Branch test
    if($this->session->userdata('user_type') == 'Admin' )
    {
        $data = array(
                    'title' => 'Dashboard',
                    'total_customers' => get_total('id', 'tbl_customers'),
                    'total_orders' => get_total('id', 'tbl_order', 'order_status = "Pending"'),
                    // 'total_cv' => get_sum('cv_cost', 'tbl_products'),
                    'out_of_stock' => get_query_data('SELECT *, tbl_product_sizes.quantity as qty FROM tbl_product_sizes JOIN tbl_products on tbl_products.product_id = tbl_product_sizes.product_id where tbl_product_sizes.quantity = total_sold'),
                    'completed_orders' => get_total('id', 'tbl_order', 'order_status = "Completed"'),
        );
    $data['view_module'] = "admin";
    $data['view_files'] = "index";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }
}



public function login()
{
    $this->load->view('admin/login');
}

public function dashboard()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
       
            redirect('admin','refresh');
    }
    else
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if($email=="" || $password=="" ){   
            $this->session->set_flashdata('error_msg', 'Username or Password is empty. Please try again!');
            redirect(base_url().'admin/login');    
        }
        
        $user_login = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );
        $this->load->model('mdl_admin');
        $data = $this->mdl_admin->validate_credentials($user_login['email'],$user_login['password']);
        if($data)
        {
            $this->session->set_userdata('id',$data['id']);
            $this->session->set_userdata('email',$data['email']);
            $this->session->set_userdata('username',$data['username']);
            $this->session->set_userdata('user_type',$data['user_type']);
            redirect('admin','refresh');
        }
        else
        {
            $this->session->set_flashdata('error_msg', 'You are Not Authorized Person, Contact to Administrator.');
            redirect('admin/login');
        }   
    }
}

public function logout()
{
    $this->session->sess_destroy();
      redirect('admin/login', 'refresh');
}

public function users()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['view_module'] = "admin";
    $data['view_files'] = "users";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

// user list

public function user_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="change_status" class="btn btn-danger btn-xs change_status">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_category" class="btn btn-info btn-xs unblock_category">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $row->username;     
                $sub_array[] = $row->email;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.'
                                <a href="#" id= "'.$row->id.'" name="delete_category" class="btn btn-danger btn-xs delete_category">Delete</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end user list

// image library. 



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

// End image uploading library


public function customers()
{
  if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['view_module'] = "admin";
    $data['view_files'] = "customers";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

// customer list

public function customers_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->customer_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_customer" class="btn btn-danger btn-xs block_customer">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_customer" class="btn btn-info btn-xs unblock_customer">UnBlock</a>';
                }
                $customer_name = $row->first_name.' '.$row->last_name;
                $sub_array = array();   
                $sub_array[] = $row->id;  
                $sub_array[] = $customer_name;     
                $sub_array[] = $row->phone;     
                $sub_array[] = $row->email;     
                $sub_array[] = $row->street_address;     
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'admin/customer_detail/'.$row->customer_id.'" class="btn btn-info btn-xs">Detail</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->customer_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->customer_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

// end customer list
public function customer_detail($customer_id)
{
  if($this->session->userdata('user_type') == 'Admin' )
    {

        $update_member = $this->input->post('update_member');
        if($update_member == 'Update Profile')
        {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');

        if($password == $confirm_password){

            $data = array(
                    'member_password' => md5($password),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'email' => $this->input->post('email'),
            );

            $result = update_data_by_where('tbl_customers', $data, 'customer_id='.$customer_id.'');
            if($result){
                
                $this->session->set_flashdata('error_msg', 'Profile Not Updated Due to Error. Please Try Again.');
                redirect('admin/customer_detail/'.$customer_id.'');     
            }
            else{
                

                $this->session->set_flashdata('success', 'Profile Updated Successfully.');
               redirect('admin/customer_detail/'.$customer_id.''); 
            }

        }
        else{
                $this->session->set_flashdata('error_msg', 'Password Not Matched Please Try Again.');
                redirect('admin/customer_detail/'.$customer_id.''); 
        }
        }

        elseif($update_member == 'Update Shipping')
        {

            $data = array(
                    'phone' => $this->input->post('phone'),
                    'country' => $this->input->post('country'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'street_address' => $this->input->post('street_address'),
                    'postal_code' => $this->input->post('postal_code'),
                    'shipping_option' => $this->input->post('shipping_option'),
            );

            $result = update_data_by_where('tbl_customers', $data, 'customer_id='.$customer_id.'');
            if($result){
                
                $this->session->set_flashdata('error_msg', 'Shipping Address Not Updated Due to Error. Please Try Again.');
                redirect('admin/customer_detail/'.$customer_id.'');     
            }
            else{
                

                $this->session->set_flashdata('success', 'Shipping Address Updated Successfully.');
                redirect('admin/customer_detail/'.$customer_id.''); 
            }

      
        }


        $data['get_data'] = get_query_data('SELECT * FROM tbl_customers where customer_id = '.$customer_id.'');
        $data['orders'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_customers on tbl_customers.customer_id = tbl_order.customer_id where tbl_order.customer_id = '.$customer_id.'');
    $data['view_module'] = "admin";
    $data['view_files'] = "customer_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}


/////////// Members //////////




    public function wishlist()
    {
       if($this->session->userdata('user_type') == 'Admin')
        {

        $data['wishlist'] = get_query_data('SELECT tbl_wishlist.id as id,product_name,sub_image,tbl_wishlist.status, tbl_wishlist.product_id, tbl_wishlist.created_at,list_from FROM tbl_wishlist JOIN tbl_products on tbl_products.product_id = tbl_wishlist.product_id order by created_at DESC');


        $data['view_module'] = "admin";
        $data['view_files'] = "wishlist";
        $this->load->module("templates");
        $this->templates->admin($data);
           }
    else{
        redirect('member/login');
    }

    }





public function sold_products()
{
  if($this->session->userdata('user_type') == 'Admin' )
    {
    $data['out_of_stock'] = get_query_data('SELECT *, tbl_product_sizes.quantity as qty FROM tbl_product_sizes JOIN tbl_products on tbl_products.product_id = tbl_product_sizes.product_id where tbl_product_sizes.quantity = total_sold order by tbl_product_sizes.created_at DESC');
    $data['title'] = "Sold Out Products";
    $data['view_module'] = "admin";
    $data['view_files'] = "sold_products";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}














/////////// end members

public function change_order_status()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {
        $submit = $this->input->post('submit_order_status');
        $order_id = $this->input->post('order_id');
        $customer_type = 'Customer';
        $order_status = $this->input->post('order_status');
        if($submit = 'Submit')
        {
            $data = array(
            'delivery_date' => $this->input->post('delivery_date'),
            'order_status' => $order_status
        );
               // $returnCatValue = save_data('tbl_order', $data);
                    $returnCatValue = update_data('tbl_order',$data,$order_id);
                    if($returnCatValue)
                    {
                        $get_email = select_columns('customer_id','tbl_order', 'id = '.$order_id.'');
                        $customer_email = select_columns('email','tbl_customers', 'customer_id = '.$get_email[0]->customer_id.'');

                        $to_email = $customer_email[0]->email;

                        $subject = 'Evershinepk Order Status';

                        $message = 'Hi, Your order status has been changed to '.$order_status.'';
                        $cc_to = 'yasirtariq123@gmail.com';
                        $to = array($to_email, $cc_to);
                        sendMail($to_email, $subject, $message, $cc_to);



                        $this->session->set_flashdata('success', 'Order Status Changed Successfully.');
                        redirect('admin/order_detail/'.$order_id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Order Status Not Changed Due to Error.');
                        redirect('admin/order_detail/'.$order_id.'');
                    }
 
        }
               

    }
    else{
        redirect('admin/login');
    }

}









public function block_customer()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Block'
        );
    $result = update_data('tbl_customers',$data, $id);
    if($result)
    {
        echo "Customer Blocked Successfully";
    }
    else{
        echo 'Sorry! Customer Not Blocked';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function unblock_customer()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Active'
        );
    $result = update_data('tbl_customers',$data, $id);
    if($result)
    {
        echo "Customer Active Successfully";
    }
    else{
        echo 'Sorry! Customer Not Activated';
    }

    }
    else{
        redirect('admin/login');
    }
}


public function block_member()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Block'
        );
    $result = update_data('tbl_member',$data, $id);
    if($result)
    {
        echo "member Blocked Successfully";
    }
    else{
        echo 'Sorry! member Not Blocked';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function unblock_member()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Active'
        );
    $result = update_data('tbl_member',$data, $id);
    if($result)
    {
        echo "member Active Successfully";
    }
    else{
        echo 'Sorry! member Not Activated';
    }

    }
    else{
        redirect('admin/login');
    }
}

// shop code

public function member_detail($member_code)
{
  if($this->session->userdata('user_type') == 'Admin' )
    {

        $update_member = $this->input->post('update_member');
        if($update_member == 'Update Profile')
        {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');

        if($password == $confirm_password){

            $data = array(
                    'member_password' => md5($password),
                    'member_name' => $this->input->post('member_name'),
                    'member_email' => $this->input->post('member_email'),
            );

            $result = update_data_by_where('tbl_member', $data, 'member_code='.$member_code.'');
            if($result){
                
                $this->session->set_flashdata('error_msg', 'Profile Not Updated Due to Error. Please Try Again.');
                redirect('admin/member_detail/'.$member_code.'');     
            }
            else{
                

                $this->session->set_flashdata('success', 'Profile Updated Successfully.');
               redirect('admin/member_detail/'.$member_code.''); 
            }

        }
        else{
                $this->session->set_flashdata('error_msg', 'Password Not Matched Please Try Again.');
                redirect('admin/member_detail/'.$member_code.''); 
        }
        }

        elseif($update_member == 'Update Shipping')
        {

            $data = array(
                    'phone_number' => $this->input->post('phone_number'),
                    'country' => $this->input->post('country'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'street' => $this->input->post('street'),
                    'address' => $this->input->post('address'),
                    'postal_code' => $this->input->post('postal_code'),
                    'shipping_option' => $this->input->post('shipping_option'),
            );

            $result = update_data_by_where('tbl_member', $data, 'member_code='.$member_code.'');
            if($result){
                
                $this->session->set_flashdata('error_msg', 'Shipping Address Not Updated Due to Error. Please Try Again.');
                redirect('admin/member_detail/'.$member_code.'');     
            }
            else{
                

                $this->session->set_flashdata('success', 'Shipping Address Updated Successfully.');
                redirect('admin/member_detail/'.$member_code.''); 
            }

      
        }


        $data['get_data'] = get_query_data('SELECT * FROM tbl_member where member_code = '.$member_code.'');
        $data['orders'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_member on tbl_member.member_code = tbl_order.customer_id where customer_id = '.$member_code.'');

        $data['team_direct'] = get_query_data('SELECT * FROM tbl_tcv_member JOIN tbl_member on tbl_member.member_code = tbl_tcv_member.member_id where direct_referal='.$member_code.'');    
    $data['team_first_indirect'] = get_query_data('SELECT * FROM tbl_tcv_member JOIN tbl_member on tbl_member.member_code = tbl_tcv_member.member_id where first_indirect='.$member_code.'');    
    $data['team_second_indirect'] = get_query_data('SELECT * FROM tbl_tcv_member JOIN tbl_member on tbl_member.member_code = tbl_tcv_member.member_id where second_indirect='.$member_code.'');   
    $data['team_third_indirect'] = get_query_data('SELECT * FROM tbl_tcv_member JOIN tbl_member on tbl_member.member_code = tbl_tcv_member.member_id where third_indirect='.$member_code.'');  
    $data['view_module'] = "admin";
    $data['view_files'] = "member_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

public function profile()
{
    if($this->session->userdata('user_type') == 'Admin' )
    {


        $id = $this->session->userdata('id');

        $update_member = $this->input->post('update_member');
        if($update_member == 'Update Profile')
        {
            $password = $this->input->post('password');
            $confirm_password = $this->input->post('confirm_password');

        if($password == $confirm_password){

            $data = array(
                    'password' => md5($password),
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
            );

            $result = update_data_by_where('tbl_member', $data, 'member_code='.$member_code.'');
            if($result){
                
                $this->session->set_flashdata('error_msg', 'Profile Not Updated Due to Error. Please Try Again.');
                redirect('member/profile');     
            }
            else{
                

                $this->session->set_flashdata('success', 'Profile Updated Successfully.');
                redirect('member/profile');
            }

        }
        else{
                $this->session->set_flashdata('error_msg', 'Password Not Matched Please Try Again.');
                redirect('member/profile');
        }
        }

       
       

    $data['get_data'] = get_query_data('SELECT * FROM tbl_users where id = '.$id.'');
    $data['title'] = "Profile";
    $data['view_module'] = "admin";
    $data['view_files'] = "profile";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }
}




public function block_shop()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Block'
        );
    $result = update_data('tbl_shops',$data, $id);
    if($result)
    {
        echo "shop Blocked Successfully";
    }
    else{
        echo 'Sorry! shop Not Blocked';
    }

    }
    else{
        redirect('admin/login');
    }
}

public function unblock_shop()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');

    $data = array(
            'status' => 'Active'
        );
    $result = update_data('tbl_shops',$data, $id);
    if($result)
    {
        echo "Customer Active Successfully";
    }
    else{
        echo 'Sorry! Customer Not Activated';
    }

    }
    else{
        redirect('admin/login');
    }
}





public function add_shop()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {
        $password = $this->input->post('shop_password');
        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'phone_number' => $this->input->post('shop_phone'),
            'password' => md5($password),
            'email' => $this->input->post('shop_email'),
            'address' => $this->input->post('shop_address'),
        );

        // $result = save_data('tbl_shops', $data);
                $this->image_config('shop_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('shop_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/shops');

                   
                }
                else
                {
                    
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['shop_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_shops', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Created Successfully.');
                        redirect('admin/shops');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Shop Not Added Due to Error.');
                        redirect('admin/shops');
                    }
                }

    }
    else{
        redirect('admin/login');
    }

}

public function shop_detail($id)
{
    if($this->session->userdata('user_type') == 'Admin' )
    {

    $where = 'id = '.$id.'';
    $data['shopname'] = select_columns('shop_name', 'tbl_shops', $where);
    $data['category'] = get_query_data('SELECT *, tbl_product_category.id as cat_id FROM tbl_shop_categories JOIN tbl_product_category on tbl_product_category.id = tbl_shop_categories.category_id WHERE status = "Active"');
    $data['sub_category'] = get_query_data('SELECT * FROM tbl_products WHERE status = "Active"');
    $data['title'] = "Shop Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "shop_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

}

public function fetch_sub_cat()
{
    $cat = $this->input->post('category_id');

    $data = get_query_data('SELECT * FROM tbl_products WHERE category_id = '.$cat.'');

    $output = '<option value="">Please Select Sub Category</option>';

    foreach ($data as $values) {

        $output .= '<option value="'.$values->id.'">'.$values->sub_cat_name.'</option>';
    }
    // print_r($output);
    // exit();
    echo $output;
}

public function product_category($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_name' => $this->input->post('category_name'),
        );
                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('category_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/product_category');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['category_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_product_category', $data);
                    if($returnCatValue)
                    {
                       
                        $this->session->set_flashdata('success', 'Product Category Added Successfully.');
                        redirect('admin/product_category');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Added Due to Error.');
                        redirect('admin/product_category');
                    }
                }
        }

        if($submit == 'Update'){
                $data = array(
                     'category_name' => $this->input->post('category_name')
                );

                $this->image_config('product_images');
                $this->upload->do_upload('category_image');
                $filename = $this->upload->data();
                $file = $filename['file_name'];


                if($file == ''){

                 $returnCatValue = update_data('tbl_product_category', $data, $id);

                }
                else{
                    $this->image_config('product_images');
                    $this->upload->do_upload('category_image');
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['category_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = update_data('tbl_product_category', $data, $id);
                }


                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Category Updated Successfully.');
                        redirect('admin/product_category/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Updated Due to Error.');
                        redirect('admin/product_category/'.$id.'');
                    }


        }

    if($id !=''){
           $data['category_data'] = get_query_data('SELECT * FROM tbl_product_category WHERE id = '.$id.'');
    }
 
    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_category";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

//////////////// Sub Category /////////////////

public function sub_category($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_id'       => $this->input->post('category_id'),
            'sub_category_name' => $this->input->post('sub_category_name'),
        );



            $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('sub_category_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/sub_category');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['sub_category_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_sub_category', $data);
                    if($returnCatValue)
                    {
                       
                        $this->session->set_flashdata('success', 'Product Sub Category Added Successfully.');
                        redirect('admin/sub_category');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Sub Category Not Added Due to Error.');
                        redirect('admin/sub_category');
                    }
                }


                
        }

        if($submit == 'Update'){
                $data = array(
                    'category_id'       => $this->input->post('category_id'),
                    'sub_category_name' => $this->input->post('sub_category_name')
                );


                $this->image_config('product_images');
                $this->upload->do_upload('sub_category_image');
                $filename = $this->upload->data();
                $file = $filename['file_name'];

                if($file == ''){

                 $returnCatValue = update_data('tbl_sub_category', $data, $id);

                }
                else{
                    $this->image_config('product_images');
                    $this->upload->do_upload('sub_category_image');
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['sub_category_image'] = $filename['file_name']; //time().$filename['file_name'];

                 
                    $returnCatValue = update_data('tbl_sub_category', $data, $id);
                }


                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product sub Category Updated Successfully.');
                        redirect('admin/sub_category/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product sub Category Not Updated Due to Error.');
                        redirect('admin/sub_category/'.$id.'');
                    }



        }

    if($id !=''){
           $data['sub_category_data'] = get_query_data('SELECT * FROM tbl_sub_category JOIN tbl_product_category on tbl_product_category.id = tbl_sub_category.category_id WHERE tbl_sub_category.id = '.$id.'');
    }
    $data['category'] = get_query_data('SELECT * FROM tbl_product_category');
    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "sub_category";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

public function sub_category_list($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->sub_category_make_datatables($id);  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->sub_category_image.'" style="width:50px; height:50px;">';
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->sub_category_name;           
                $sub_array[] = $row->category_name;           
                $sub_array[] = $image;           
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = '<a href="#" id = "'.$row->id.'" name="delete_sub_category" class="btn btn-danger btn-xs delete_sub_category">Delete</a>'.'<a href="'.base_url().'admin/sub_category/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->sub_category_get_all_data($id),  
                "recordsFiltered"     =>     $this->mdl_admin->sub_category_get_filtered_data($id),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}

////////////////End Sub Category //////////////



public function add_shop_product()
{

    if( $this->session->userdata('user_type') == 'Admin')
    {
        $data = array(

            'shop_id' => $this->input->post('shop_id'),
            'category_id' => $this->input->post('shop_category_id'),
            'sub_category_id' => $this->input->post('sub_category_id'),
            'price' => $this->input->post('price'),
            'description' => $this->input->post('description'),
        );

                    $returnCatValue = save_data('tbl_shop_products', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Product Added Successfully.');
                        redirect('admin/shop_detail/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Added Due to Error.');
                        redirect('admin/shop_detail/'.$id.'');
                    }
                

    }
    else{
        redirect('admin/login');
    }

}

public function category_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->category_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->category_image.'" style="width:50px; height:50px;">';
             
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->category_name;      
                $sub_array[] = $image;      
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = '<a href="#" id = "'.$row->id.'" name="delete_category" class="btn btn-danger btn-xs delete_category">Delete</a>'.'<a href="'.base_url().'admin/product_category/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->category_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->category_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}



// notification code

public function notification()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'notification' => $this->input->post('notification'),
            'promo_code' => $this->input->post('promo_code'),
            'promo_price' => $this->input->post('promo_price'),
        );

                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('notification_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/notification');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['notification_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_notification', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Notifaction Added Successfully.');
                        redirect('admin/notification');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Notificaiton Not Added Due to Error.');
                        redirect('admin/notification');
                    }
                }
        }



    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "notification";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}


public function notification_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->notification_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $image = '<img src="'.base_url().'/product_images/'.$row->notification_image.'" style="width:50px; height:50px;">';

                if($row->status == 'Active'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="block_product" class="btn btn-danger btn-xs block_product">Block</a>';
                }
                else if($status == 'Block'){
                    $butt = '<a href="#" id = "'.$row->id.'" name="unblock_product" class="btn btn-info btn-xs unblock_product">UnBlock</a>';
                }
                $sub_array = array();   
                $sub_array[] = $row->id;   
                $sub_array[] = $row->notification;  
                $sub_array[] = $row->promo_code;     
                $sub_array[] = $row->promo_price;     
                $sub_array[] = $image;         
                $sub_array[] = $row->status;     
                $sub_array[] = $row->created_at;  
                $sub_array[] = ''.$butt.' '.'<a href="'.base_url().'admin/product_detail/'.$row->id.'" class="btn btn-info btn-xs">Update</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->notification_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->notification_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}
// end notification code


// Sub category Code


public function products($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {




    $data['category'] = get_query_data('SELECT * FROM tbl_product_category where status = "Active"');
    $data['sub_category'] = get_query_data('SELECT * FROM tbl_sub_category where status = "Active"');
    $data['product_type'] = get_query_data('SELECT * FROM tbl_product_type where status = "Active"');
    $data['title'] = "Items";
    $data['view_module'] = "admin";
    $data['view_files'] = "products";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

// end product sub category

public function add_product($id)
{
    if($this->session->userdata('user_type') == 'Admin' )
    {


                $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
                                'product_id' => $this->input->post('product_id'),
                                'category_id' => $this->input->post('category_id'),
                                'sub_cat_id' => $this->input->post('sub_cat_id'),
                                'product_name' => $this->input->post('product_name'),
                                'type' => $this->input->post('type'),
                                //  'price' => $this->input->post('price'),
                                //  'new_price' => $this->input->post('new_price'),
                                // 'product_color' => $this->input->post('product_color'),
                                // 'product_size' => $this->input->post('product_size'),
                                'description' => $this->input->post('description'),


                                // 'member_price' => $this->input->post('member_price'),
                                // 'cv' => $this->input->post('cv'),
                                'video_url' => $this->input->post('video_url'),
                                // 'weight' => $this->input->post('weight'),
                                // 'brand' => $this->input->post('brand'),
                                // 'transport_charges' => $this->input->post('transport_charges'),
                                // 'system_charges' => $this->input->post('system_charges'),
                                // 'packing_charges' => $this->input->post('packing_charges'),
                                // 'no_of_cv' => $this->input->post('no_of_cv'),
                                // 'cv_cost' => $this->input->post('cv_cost'),
                                // 'company_total_cost' => $this->input->post('company_total_cost'),
                                // 'member_retail_price' => $this->input->post('member_retail_price'),
                                // 'customer_retail_price' => $this->input->post('customer_retail_price'),
                                // 'company_profile' => $this->input->post('company_profile'),
                                // 'merchant_details' => $this->input->post('merchant_details'),


        );

                $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
                if(!$this->upload->do_upload('sub_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/products');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['sub_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = save_data('tbl_products', $data);
                    if($returnCatValue)
                    {



                        $p_id = select_columns('product_id','tbl_products','id = '.$returnCatValue.'');
                                        // Multiple Images Uploading
                     $number_of_files = count($_FILES['userfile']['name']);

        $files = $_FILES;

        $images = array();
        // if(!is_dir('app-assets/news_images'))
        // {
        //     mkdir('./app-assets/news_images',true);
        // }
        for($i=0; $i < $number_of_files; $i++){
          
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            $config['upload_path'] = './product_images/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
    
            if(!$this->upload->do_upload('userfile'))
            {
                   
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
                // exit();
            }
            else
            {

                $data = array(
                    'upload_data' => $this->upload->data());

                $data = array(
                         'product_id' => $p_id[0]->product_id,
                         'image' => $data['upload_data']['file_name'],
                    );
                    $result_set = save_data('tbl_product_images', $data);
                }
               
            
           
        }


                // END multiple Images


                        $this->session->set_flashdata('success', 'Product Added Successfully.');
                        redirect('admin/view_product/'.$p_id[0]->product_id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Added Due to Error.');
                        redirect('admin/products');
                    }
                }
        }

                if($submit == 'Update'){
                        $data = array(
                                
                                'category_id' => $this->input->post('category_id'),
                                'sub_cat_id' => $this->input->post('sub_cat_id'),
                                'product_name' => $this->input->post('product_name'),
                                'type' => $this->input->post('type'),
                                'price' => $this->input->post('price'),
                                'new_price' => $this->input->post('new_price'),
                                'product_color' => $this->input->post('product_color'),
                                'product_size' => $this->input->post('product_size'),
                                'description' => $this->input->post('description'),

                                // 'member_price' => $this->input->post('member_price'),
                                // 'cv' => $this->input->post('cv'),
                                'video_url' => $this->input->post('video_url'),
                                // 'stock' => $this->input->post('stock'),
                                'weight' => $this->input->post('weight'),
                                'brand' => $this->input->post('brand'),
                                'transport_charges' => $this->input->post('transport_charges'),
                                'system_charges' => $this->input->post('system_charges'),
                                'packing_charges' => $this->input->post('packing_charges'),
                                'no_of_cv' => $this->input->post('no_of_cv'),
                                'cv_cost' => $this->input->post('cv_cost'),
                                'company_total_cost' => $this->input->post('company_total_cost'),
                                'member_retail_price' => $this->input->post('member_retail_price'),
                                'customer_retail_price' => $this->input->post('customer_retail_price'),
                                'company_profile' => $this->input->post('company_profile'),
                                'merchant_details' => $this->input->post('merchant_details'),
                                );

                        $this->image_config('product_images');
                        $this->upload->do_upload('sub_image');
                        $filename = $this->upload->data();
                        $file = $filename['file_name'];


                        if($file == ''){

                         $returnCatValue = update_data('tbl_products', $data, $id);

                        }
                        else{
                            $this->image_config('product_images');
                            $this->upload->do_upload('sub_image');
                            $filename = $this->upload->data();
                            $new_name = $filename['file_name'];
                            $data['sub_image'] = $filename['file_name']; //time().$filename['file_name'];
                            $returnCatValue = update_data('tbl_products', $data, $id);
                        }

                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/products/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Updated Due to Error.');
                        redirect('admin/products/'.$id.'');
                    }


        }

        if($submit == 'Add Size'){
                $data = array(
                                'product_id'  => $this->input->post('size_product_id'),  
                                'quantity' => $this->input->post('quantity'),
                                'size' => $this->input->post('size'),
                                'color' => $this->input->post('color'),
                                );
                    $returnCatValue = save_data('tbl_product_sizes', $data);
                 if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Size Added To Product Successfully.');
                        redirect('admin/add_product/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Size Not Added Updated Due to Error.');
                        redirect('admin/add_product/'.$id.'');
                    }

        }

    if($id !=''){
           $data['sub_category_data'] = get_query_data('SELECT * FROM tbl_products JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id
           WHERE tbl_products.id = '.$id.'');
    }





        $data['category'] = get_query_data('SELECT * FROM tbl_product_category where status = "Active"');
    $data['sub_category'] = get_query_data('SELECT * FROM tbl_sub_category where status = "Active"');
    $data['product_type'] = get_query_data('SELECT * FROM tbl_product_type where status = "Active"');
    $data['title'] = "products";
    $data['view_module'] = "admin";
    $data['view_files'] = "add_product";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }
}

public function product_detail($product_id)
{
    $data['sold_products'] = get_query_data('SELECT COUNT(*) as cnt FROM `tbl_order_detail` JOIN tbl_order on tbl_order.id = tbl_order_detail.order_id where product_id = '.$product_id.' and order_status = "Completed"');
    $data['p_price'] = get_query_data('SELECT price, new_price FROM `tbl_products` where product_id = '.$product_id.'');
    $data['product_detail'] = get_query_data('SELECT * FROM `tbl_products` JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id JOIN tbl_sub_category on tbl_sub_category.id = tbl_products.sub_cat_id where tbl_products.product_id = '.$product_id.'');
    $data['sizes'] = get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' ORDER BY created_at DESC');
    $data['title'] = "product Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_detail";
    $this->load->module("templates");
    $this->templates->admin($data);
}

public function view_product($product_id)
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
    
        $submit = $this->input->post('submit');

        if($submit == 'Update Product'){
        $data = array(
                                'product_name' => $this->input->post('product_name'),
                                'category_id' => $this->input->post('category_id'),
                                'sub_cat_id' => $this->input->post('sub_cat_id'),
                                'video_url' => $this->input->post('video_url'),
                                'description' => $this->input->post('description'),
                                );


                

                    $returnCatValue = update_data_by_where('tbl_products', $data,'product_id='.$product_id.'');
                    if($returnCatValue)
                    {

                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Updated Due to Error.');
                        redirect('admin/products');

                    }
                    else
                    {
                        
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/view_product/'.$product_id.'');
                    }
                
        }

        if($submit == 'Update Product Info'){
            $p_info_id = $this->input->post('p_info_id');
                    $data = array(
                                
                                'product_cost' => $this->input->post('product_cost'),
                                'customer_retail_price' => $this->input->post('customer_retail_price'),
                                'customer_retail_price_new' => $this->input->post('customer_retail_price_new'),
                                'product_status' => $this->input->post('product_status'),
                                'product_area' => $this->input->post('product_area'),
                                );


                

                    $returnCatValue = update_data_by_where('tbl_product_info', $data,'product_id='.$product_id.' and id = '.$p_info_id.'');
                    if($returnCatValue)
                    {

                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Updated Due to Error.');
                        redirect('admin/products');

                    }
                    else
                    {
                        
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/view_product/'.$product_id.'');
                    }
                
        }
  
    $data = array('sold_products' => get_query_data('SELECT SUM(total_sold) as total_products FROM tbl_product_sizes 
                                                    where product_id = '.$product_id.''),
                   
                    'revenue' => get_query_data('SELECT p_info_id,product_quantity,company_profit, SUM(product_quantity * company_profit) as  c_profit FROM `tbl_order` as O JOIN tbl_order_detail as D on D.order_id = O.id JOIN tbl_product_info as I on I.id = D.p_info_id where O.order_status = "Completed" and D.product_id = '.$product_id.''),

                );

    $data['product_detail'] = get_query_data('SELECT * FROM `tbl_products` JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id JOIN tbl_sub_category on tbl_sub_category.id = tbl_products.sub_cat_id where tbl_products.product_id = '.$product_id.'');
       $data['product_expense_info'] = get_query_data('SELECT * FROM `tbl_product_info` where product_id = '.$product_id.'');
    $data['sizes'] = get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' ORDER BY created_at DESC');
    $data['category'] = get_query_data('SELECT * FROM tbl_product_category where status = "Active"');
    $data['sub_category'] = get_query_data('SELECT * FROM tbl_sub_category where status = "Active"');
    $data['product_category'] = 
    $data['title'] = "Product View";
    $data['view_module'] = "admin";
    $data['view_files'] = "view_product";
    $this->load->module("templates");
    $this->templates->admin($data);
     }
    else{
        redirect('admin/login');
    }
}



public function view_review($product_id)
{
    if($this->session->userdata('user_type') == 'Admin' )
    {
    
    $data = array('total_reviews' =>  get_total('id', 'tbl_review', 'product_id = '.$product_id.''),
                   
                    'rating' => get_query_data('SELECT * FROM `tbl_review` as R 
                                                where R.product_id = '.$product_id.' order by created_at DESC'),

                );


    $data['title'] = "Product Reviews";
    $data['view_module'] = "admin";
    $data['view_files'] = "view_review";
    $this->load->module("templates");
    $this->templates->admin($data);
     }
    else{
        redirect('admin/login');
    }
}


public function delete_review($product_id ,$id)
{
    delete_data('tbl_review',$id);
    delete_data_by_where('tbl_review_images', 'review_id = '.$id.'');
    redirect('admin/view_review/'.$product_id.'');

    echo '<script>alert("Review Deleted Successfully!")</script>';
}

public function product_expense($product_id)
{



    if($this->session->userdata('user_type') == 'Admin' )
    {


                $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(

                                'product_id' => $product_id,
                                'product_cost' => $this->input->post('product_cost'),
                                'customer_retail_price' => $this->input->post('customer_retail_price'),
                                'customer_retail_price_new' => $this->input->post('customer_retail_price_new'),
                                'product_status' => $this->input->post('product_status'),
                                'product_area' => $this->input->post('product_area'),
                                );


        

                    $returnCatValue = save_data('tbl_product_info', $data);
                    if($returnCatValue)
                    {



              

                        $this->session->set_flashdata('success', 'Product Added Successfully.');
                        redirect('admin/view_product/'.$product_id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Not Added Due to Error.');
                        redirect('admin/products');
                    }
                
        }

                if($submit == 'Update'){
                        $data = array(
                                
                               
                                'product_cost' => $this->input->post('product_cost'),
                                'customer_retail_price' => $this->input->post('customer_retail_price'),
                                'customer_retail_price_new' => $this->input->post('customer_retail_price_new'),
                                'product_status' => $this->input->post('product_status'),
                                'product_area' => $this->input->post('product_area'),
                                );


                         $returnCatValue = update_data('tbl_product_info', $data, $id);

                       

                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Updated Successfully.');
                        redirect('admin/products/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Updated Due to Error.');
                        redirect('admin/products/'.$id.'');
                    }
                }


        

        if($submit == 'Add Size'){
                $data = array(
                                'product_id'  => $this->input->post('size_product_id'),  
                                'quantity' => $this->input->post('quantity'),
                                'size' => $this->input->post('size'),
                                'color' => $this->input->post('color'),
                                );
                    $returnCatValue = save_data('tbl_product_sizes', $data);
                 if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Size Added To Product Successfully.');
                        redirect('admin/add_product/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Size Not Added Updated Due to Error.');
                        redirect('admin/add_product/'.$id.'');
                    }

        }

    if($id !=''){
           $data['sub_category_data'] = get_query_data('SELECT * FROM tbl_products JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id
           WHERE tbl_products.id = '.$id.'');
    }





   $data['product_detail'] = get_query_data('SELECT * FROM `tbl_products` JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id JOIN tbl_sub_category on tbl_sub_category.id = tbl_products.sub_cat_id where tbl_products.product_id = '.$product_id.'');


    $data['sizes'] = get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' ORDER BY created_at DESC');
    $data['title'] = "Product Expense";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_expense";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }

   
 
}


public function add_stock($product_id,$product_info_id)
{
    


    if($this->session->userdata('user_type') == 'Admin' )
    {


                $submit = $this->input->post('submit');        

        if($submit == 'Add Size'){
                $data = array(
                                'product_id'  => $product_id,  
                                'p_info_id'  => $product_info_id,  
                                'quantity' => $this->input->post('quantity'),
                                'size' => $this->input->post('size'),
                                'color' => $this->input->post('color'),
                                'size_price' => $this->input->post('size_price'),
                                );
                    $returnCatValue = save_data('tbl_product_sizes', $data);
                 if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Size Added To Product Successfully.');
                        redirect('admin/view_product/'.$product_id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Size Not Added Updated Due to Error.');
                        redirect('admin/view_product/'.$product_id.'');
                    }

        }



    $data['product_detail'] = get_query_data('SELECT * FROM `tbl_products` JOIN tbl_product_category on tbl_product_category.id = tbl_products.category_id JOIN tbl_sub_category on tbl_sub_category.id = tbl_products.sub_cat_id where tbl_products.product_id = '.$product_id.'');
       $data['product_expense_info'] = get_query_data('SELECT * FROM `tbl_product_info` where product_id = '.$product_id.'');
    $data['sizes'] = get_query_data('SELECT * FROM tbl_product_sizes where product_id = '.$product_id.' ORDER BY created_at DESC');
    $data['title'] = "Add stock";
    $data['view_module'] = "admin";
    $data['view_files'] = "add_stock";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }








}


public function edit_stock($stock_id, $product_id)
{
    
    if($this->session->userdata('user_type') == 'Admin' )
    {


        $submit = $this->input->post('submit');        

        if($submit == 'Update Stock'){
                $data = array(  
                                'quantity' => $this->input->post('quantity'),
                                'size' => $this->input->post('size'),
                                'color' => $this->input->post('color'),
                                'size_price' => $this->input->post('size_price'),
                                );
                    $returnCatValue = update_data('tbl_product_sizes', $data, $stock_id);
                 if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Size & Stock has been updated Successfully.');
                        redirect('admin/view_product/'.$product_id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Size & Stock has not been Updated Due to Error.');
                        redirect('admin/view_product/'.$product_id.'');
                    }

        }


    $data['sizes'] = get_query_data('SELECT * FROM tbl_product_sizes where id = '.$stock_id.' ORDER BY created_at DESC');
    $data['title'] = "Edit Stock";
    $data['view_module'] = "admin";
    $data['view_files'] = "edit_stock";
    $this->load->module("templates");
    $this->templates->admin($data);

     }
    else{
        redirect('admin/login');
    }



}




// sub category list
public function product_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->product1_make_datatables();  
           $data = array();  
           $count = 1;
           foreach($fetch_data as $row)  
           {  
                $status = $row->status;
                $img = $row->sub_image;
                if($img == ''){
                    $image = '<button style="font-size:24px" type="bytton" name="product_image" id="'.$row->id.'" data-toggle="modal" data-target="#myModal" class = "update_product_image"><img src="'.base_url().'/adminfiles/images/camera.png" style=""></button>';
                }
                elseif ($img != '') {
                    $image = '<img src="'.base_url().'/product_images/'.$img.'" style="width:50px; height:50px;">';
                }
                
                
                $sub_array = array();   

                $sub_array[] = $count++;   
                $sub_array[] = $row->product_id;   
                $sub_array[] = $image; 
                $sub_array[] = $row->product_name;     
                $sub_array[] = $row->category_name; 
                // $sub_array[] = $row->stock; 
                // $sub_array[] = $row->price; 
                // $sub_array[] = $row->no_of_cv; 
                // $sub_array[] = $row->cv_cost; 
                // $sub_array[] = $row->member_retail_price; 
                // $sub_array[] = $row->customer_retail_price; 

                // $sub_array[] = $row->type;      
                // $sub_array[] = $row->product_color;      
                // $sub_array[] = $row->product_size;      
     
                // $sub_array[] = $row->status;     
                // $sub_array[] = $row->created_at;  
                $sub_array[] = '<a href="'.base_url().'admin/product_images/'.$row->product_id.'" class="btn btn-info btn-xs">Add Img</a> <a href="'.base_url().'admin/view_product/'.$row->product_id.'" class="btn btn-info btn-xs">View</a> <a href="'.base_url().'admin/view_review/'.$row->product_id.'" class="btn btn-success btn-xs">Product Reviews</a>';   
                  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->product1_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->product1_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}




// end sub category

public function update_product_image()
{
    $id = $this->input->post('image_id');

     $this->image_config('product_images');
               // $upload = $this->upload->do_upload('music');
               
               
                if(!$this->upload->do_upload('product_image'))
                {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error_msg', $error);
                    redirect('admin/products');
                }
                else
                {
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['sub_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = update_data('tbl_products', $data, $id);
                    if($returnCatValue)
                    {


                        echo "Image Updated Successfully.";

                    }
                    else
                    {
                        echo "Image Not Updated Successfully.";
                    }
                }


}

// product type
public function product_type()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'product_type' => $this->input->post('product_type'),
        );

       
                    $returnCatValue = save_data('tbl_product_type', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Product Type Added Successfully.');
                        redirect('admin/product_type');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Type Not Added Due to Error.');
                        redirect('admin/product_type');
                    }
                }
                    $data['product_type'] = get_query_data('SELECT * FROM tbl_product_type where status = "Active"');
    $data['title'] = "Product Type";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_type";
    $this->load->module("templates");
    $this->templates->admin($data);
        }




    
    else{
        redirect('admin/login');
    }

}


// end product type

// delete product type

public function delete_product_type($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
            $result = delete_data('tbl_product_type', $id);

            if($result)
                    {
                        $this->session->set_flashdata('success', 'Product Type Deleted Successfully.');
                        redirect('admin/product_type');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Type Not Deleted Due to Error.');
                        redirect('admin/product_type');
                    }



    }
    else{
        redirect('admin/login');
    }

}

// end delete product tyope


// update shop info

public function update_shop($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');
        if($submit == 'Update'){


        $password = $this->input->post('shop_password');
        $data = array(
            'shop_name' => $this->input->post('shop_name'),
            'phone_number' => $this->input->post('shop_phone'),
            'email' => $this->input->post('shop_email'),
            'address' => $this->input->post('shop_address'),
            'shop_lat' => $this->input->post('shop_lat'),
            'shop_lng' => $this->input->post('shop_lng')
        );


         $this->image_config('shop_images');
                $this->upload->do_upload('shop_image');
                $filename = $this->upload->data();
                $file = $filename['file_name'];


                if($file == ''){

                 $returnCatValue = update_data('tbl_shops', $data, $id);

                }
                else{
                    $this->image_config('shop_images');
                    $this->upload->do_upload('shop_image');
                    $filename = $this->upload->data();
                    $new_name = $filename['file_name'];
                    $data['shop_image'] = $filename['file_name']; //time().$filename['file_name'];
                    $returnCatValue = update_data('tbl_shops', $data, $id);
                }
           
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Shop Updated Successfully.');
                        redirect('admin/shops');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Shop Not Updated Due to Error.');
                        redirect('admin/shops');
                    }
                
                


                }

    $data['shop_data'] = get_query_data('SELECT * FROM tbl_shops');
    $data['title'] = "Shop Information";
    $data['view_module'] = "admin";
    $data['view_files'] = "update_shop";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}


// end update shop info

// change shop_password

public function change_shop_password($id)
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
        $id = $this->input->post('shop_id');
        $password = $this->input->post('shop_password');
        $confirm_password = $this->input->post('confirm_shop_password');

        if($password == $confirm_password){

            $data = array(
                    'password' => md5($password)
            );

            $result = update_data('tbl_shops', $data, $id);
            if($result){
                $this->session->set_flashdata('success', 'Password Changed Successfully.');
                redirect('admin/update_shop/'.$id.'');

            }
            else{
                $this->session->set_flashdata('error_msg', 'Password Not Changed Due to Error. Please Try Again.');
                redirect('admin/update_shop/'.$id.'');
            }

        }
        else{
                $this->session->set_flashdata('error_msg', 'Password Not Matched Please Try Again.');
                redirect('admin/update_shop/'.$id.'');
        }

    }
    else{
         redirect('admin/login');
    }
}
// end change shop password

// delete category
    public function delete_category()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');
    $image = select_columns('category_image','tbl_product_category', 'id='.$id.'');
        $path = $image[0]->category_image;
      
        unlink('product_images/'.$path);

    $result = delete_data('tbl_product_category', $id);
    if($result)
    {
        echo "Category Deleted Successfully";
    }
    else{
        echo 'Sorry! Category Not Deleted';
    }

    }
    else{
        redirect('admin/login');
    }
}

// end delete category

// delete category
    public function delete_sub_category()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {
    $id = $this->input->post('id');
        $image = select_columns('sub_category_image','tbl_sub_category', 'id='.$id.'');
        $path = $image[0]->sub_category_image;
      
        unlink('product_images/'.$path);
    $result = delete_data('tbl_sub_category', $id);
    if($result)
    {
        echo "Sub Category Deleted Successfully";
    }
    else{
        echo 'Sorry! Category Not Deleted';
    }

    }
    else{
        redirect('admin/login');
    }
}

// end delete category


// add category to shop
    public function add_category_shop($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'shop_id' => $this->input->post('shop_id'),
        );

                    $returnCatValue = save_data('tbl_shop_categories', $data);
                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Category Successfully Added to Shop.');
                        redirect('admin/add_category_shop/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Category Not Added Due to Error.');
                        redirect('admin/add_category_shop/'.$id.'');
                    }
                
        }

    $data['category_data'] = get_query_data('SELECT * FROM tbl_product_category WHERE status = "Active"');
    $data['title'] = "Add Category to Shop";
    $data['view_module'] = "admin";
    $data['view_files'] = "add_category_shop";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

// end add category to shop




////////////////////////////////////// ORDER Module /////////////////////////

    public function orders()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

    $data['title'] = "Orders";
    $data['view_module'] = "admin";
    $data['view_files'] = "orders";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

//////// ORder List ////////

public function order_list()
{
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $this->load->model("mdl_admin");  
           $fetch_data = $this->mdl_admin->order_make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $customer_name = $row->first_name.' '.$last_name;
                
                
                $shop_array = array();   
                $shop_array[] = $row->tracking_id;   
                $shop_array[] = $customer_name;   
                $shop_array[] = $row->customer_type;   
                // $shop_array[] = $row->sub_total;          
                $shop_array[] = $row->promo_discount;          
                $shop_array[] = $row->order_grand_total;          
                $shop_array[] = $row->order_payment_method;          
                $shop_array[] = $row->order_status;         
                $shop_array[] = $row->created_at;  
                $shop_array[] = '<a href="'.base_url('admin/order_detail/'.$row->order_id.'').'" name="delete_shop_category" class="btn btn-info btn-xs">Detail</a>';   
                  
                $data[] = $shop_array;  
           }  
           $output = array(  
                "draw"                    =>     intval($_POST["draw"]),  
                "recordsTotal"          =>      $this->mdl_admin->order_get_all_data(),  
                "recordsFiltered"     =>     $this->mdl_admin->order_get_filtered_data(),  
                "data"                    =>     $data  
           );  
           echo json_encode($output); 

           }
       else{
        redirect('admin/login');
    }
}





    public function order_detail($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

    // $data['order_products'] = get_query_data('SELECT * FROM tbl_order 
    //                                     JOIN tbl_order_detail on tbl_order_detail.order_id = tbl_order.id
    //                                     JOIN tbl_products on tbl_products.product_id = tbl_order_detail.product_id
    //                                     JOIN tbl_product_info on tbl_product_info.id = tbl_order_detail.p_info_id
    //                                      WHERE tbl_order.id = '.$id.'');
    // $data['order_info'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_customers on tbl_customers.customer_id = tbl_order.customer_id where tbl_order.id = '.$id.'');
    // $data['second_shipping_info'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_customer_shipping_info on tbl_customer_shipping_info.customer_id = tbl_order.customer_id where tbl_order.id = '.$id.'');

    $data['order_products'] = get_query_data('SELECT * FROM tbl_order 
                                        JOIN tbl_order_detail on tbl_order_detail.order_id = tbl_order.id
                                        JOIN tbl_products on tbl_products.product_id = tbl_order_detail.product_id
                                        JOIN tbl_product_sizes on tbl_product_sizes.id = tbl_order_detail.size_id
                                        JOIN tbl_product_info on tbl_product_info.id = tbl_order_detail.p_info_id
                                         WHERE tbl_order.id = '.$id.'');
   
    
    $data['customer_order_info'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_customers on tbl_customers.customer_id = tbl_order.customer_id where tbl_order.id = '.$id.'');
 
    $data['second_shipping_info'] = get_query_data('SELECT * FROM tbl_order JOIN tbl_customer_shipping_info on tbl_customer_shipping_info.customer_id = tbl_order.customer_id where tbl_order.id = '.$id.'');
    $data['title'] = "Order Detail";
    $data['view_module'] = "admin";
    $data['view_files'] = "order_detail";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

//////// END order List ////////
//////// Discount Coupon ////////
public function discount_coupon($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'discount_coupon' => $this->input->post('discount_coupon'),
            'discount_amount' => $this->input->post('discount_amount'),
        );

                    $returnCatValue = save_data('tbl_discount_coupon', $data);
                    if($returnCatValue)
                    {
                       
                        $this->session->set_flashdata('success', 'Product Category Added Successfully.');
                        redirect('admin/discount_coupon');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Category Not Added Due to Error.');
                        redirect('admin/discount_coupon');
                    }
                
        }

        if($submit == 'Update'){
                $data = array(
                    'discount_coupon' => $this->input->post('discount_coupon'),
                    'discount_amount' => $this->input->post('discount_amount'),
                    'status' => $this->input->post('status'),
                );


                 $returnCatValue = update_data('tbl_discount_coupon', $data, $id);



                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Status Changed Successfully.');
                        redirect('admin/discount_coupon/'.$id.'');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Status Not Updated Due to Error.');
                        redirect('admin/discount_coupon/'.$id.'');
                    }


        }

    if($id !=''){
           $data['discount_data'] = get_query_data('SELECT * FROM tbl_discount_coupon WHERE id = '.$id.'');
    }

    $data['discount_coupons'] = get_query_data('SELECT * FROM tbl_discount_coupon order By created_at DESC');
    $data['title'] = "Discount Coupon";
    $data['view_module'] = "admin";
    $data['view_files'] = "discount_coupon";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}
//////// END Discount Coupon ////////

/////// Delivery Module Code ////////

public function delivery($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit');

        if($submit == 'Submit'){
        $data = array(
            'delivery_price' => $this->input->post('delivery_price'),
            'status' => $this->input->post('status'),
        );

                    $returnCatValue = save_data('tbl_delivery_price', $data);
                    if($returnCatValue)
                    {
                       
                        $this->session->set_flashdata('success', 'Delivery Price Added.');
                        redirect('admin/delivery');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Delivery Price Not Added Due to Error.');
                        redirect('admin/delivery');
                    }
                
        }

        if($submit == 'Update'){
            $delivery_id = $this->input->post('delivery_id');
                $data = array(
                    'delivery_price' => $this->input->post('delivery_price'),
                    'status' => $this->input->post('status'),
                );


                 $returnCatValue = update_data('tbl_delivery_price', $data, $delivery_id);



                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Delivery Price Changed Successfully.');
                        redirect('admin/delivery');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Price Not Updated Due to Error.');
                        redirect('admin/delivery');
                    }


        }


    $data['delivery'] = get_query_data('SELECT * FROM tbl_delivery_price order By created_at DESC');
    $data['delivery_coupon'] = get_query_data('SELECT * FROM tbl_delivery_coupon order By created_at DESC');
    $data['title'] = "Delivery";
    $data['view_module'] = "admin";
    $data['view_files'] = "delivery";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}

public function delivery_coupon($id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

        $submit = $this->input->post('submit_delivery_coupon');

        if($submit == 'Submit'){
        $data = array(
            'delivery_coupon' => $this->input->post('delivery_coupon'),
            'delivery_status' => $this->input->post('delivery_status'),
        );

                    $returnCatValue = save_data('tbl_delivery_coupon', $data);
                    if($returnCatValue)
                    {
                       
                        $this->session->set_flashdata('success', 'Delivery Coupon Price Added.');
                        redirect('admin/delivery');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Delivery Price Not Added Due to Error.');
                        redirect('admin/delivery');
                    }
                
        }

        if($submit == 'Update'){
            $delivery_coupon_id = $this->input->post('delivery_coupon_id');
                $data = array(
                    'delivery_coupon' => $this->input->post('delivery_coupon'),
                    'delivery_status' => $this->input->post('delivery_status'),
                );


                 $returnCatValue = update_data('tbl_delivery_coupon', $data, $delivery_coupon_id);



                    if($returnCatValue)
                    {
                        $this->session->set_flashdata('success', 'Delivery Price Changed Successfully.');
                        redirect('admin/delivery');

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Price Not Updated Due to Error.');
                        redirect('admin/delivery');
                    }


        }

    }
    else{
        redirect('admin/login');
    }

}
public function fetch_delivery_data()
{
    if($this->session->userdata('user_type') == 'Admin'){
        $id = $this->input->post('id');
     

        $result = get_query_data('SELECT * FROM tbl_delivery_price WHERE id = '.$id.'');

         echo json_encode($result);
    
         //print_r($result);
        //echo $result;
       
    
    }
    else{

        redirect('admin/login');

    }
}
public function fetch_delivery_coupon_data()
{
    if($this->session->userdata('user_type') == 'Admin'){
        $id = $this->input->post('id');
     

        $result = get_query_data('SELECT * FROM tbl_delivery_coupon WHERE id = '.$id.'');

         echo json_encode($result);
    
         //print_r($result);
        //echo $result;
       
    
    }
    else{

        redirect('admin/login');

    }
}
/////// End Delivery Module Code ////////

// Product More Images
public function product_images($product_id)
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

    $data['product_images'] = get_query_data('SELECT * FROM tbl_product_images where product_id = '.$product_id.'');
    $data['title'] = "Product Images";
    $data['view_module'] = "admin";
    $data['view_files'] = "product_images";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}
public function add_product_images($product_id)
{

     $number_of_files = count($_FILES['userfile']['name']);

        $files = $_FILES;

        $images = array();
        // if(!is_dir('app-assets/news_images'))
        // {
        //     mkdir('./app-assets/news_images',true);
        // }
        for($i=0; $i < $number_of_files; $i++){
          
            $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
            $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
            $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

            $config['upload_path'] = './product_images/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '0';
            $config['max_width'] = '0';
            $config['max_height'] = '0';
            $config['overwrite'] = TRUE;
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = true;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $this->upload->do_upload('userfile');
    
            if(!$this->upload->do_upload('userfile'))
            {
                   
                $error = array('error' => $this->upload->display_errors());
                // print_r($error);
                // exit();
            }
            else
            {

                $product_id = $this->input->post('product_id');
                $data = array(
                    'upload_data' => $this->upload->data());

                $data = array(
                         'product_id' => $product_id,
                         'image' => $data['upload_data']['file_name'],
                    );
                    $result_set = save_data('tbl_product_images', $data);
                }
               
            
           
        }
           if($result_set)
                    {
                        $this->session->set_flashdata('success', 'Product Images Added Successfully.');
                        redirect('admin/product_images/'.$product_id);

                    }
                    else
                    {
                        $this->session->set_flashdata('error_msg', 'Sorry! Product Images Not Added Due to Error.');
                        redirect('admin/product_images/'.$product_id);
                    }

}
// END product Images
public function delete_product_image()
{
    if($this->session->userdata('user_type') == 'Admin'){
          $id = $this->input->post('id');
          $image1 = select_columns('image','tbl_product_images', 'id='.$id.'');
            $path = $image1[0]->image;
      
            unlink('product_images/'.$path);

          delete_data('tbl_product_images',$id);
          echo 'Deleted Successfully.';  

    }
    else{
redirect('admin/login');
    }
}

public function change_wishlist_status()
{
    if($this->session->userdata('user_type') == 'Admin'){
          $status = $this->input->post('status');
          $wish_id = $this->input->post('wish_id');
          $data = array('status' => $status);
          update_data_by_where('tbl_wishlist',$data,'id='.$wish_id.'');

          echo 'Wishlist Status has been Updated.';  

    }
    else{
redirect('admin/login');
    }
}

public function withdrawal_requests()
{  
    if( $this->session->userdata('user_type') == 'Admin')
    {

    // $data['product_images'] = get_query_data('SELECT * FROM tbl_product_images where product_id = '.$product_id.'');
    $data['title'] = "Withdrawal Requests";
    $data['view_module'] = "admin";
    $data['view_files'] = "withdrawal_requests";
    $this->load->module("templates");
    $this->templates->admin($data);

    }
    else{
        redirect('admin/login');
    }

}





public function fetch_sub_cat_product()
{
    $category_id = $this->input->post('category_id');

    // $data = get_query_data("SELECT * FROM tbl_menu_category WHERE type = '".$cat."'");
    

    $output = '<option value="">Please Select Sub Category</option>';
    
            $data = select_columns('sub_category_name,id','tbl_sub_category','category_id='.$category_id.'');
        // $data = get_query_data('SELECT client_name FROM tbl_clients GROUP BY client_name order by created_at DESC');
        foreach ($data as $client) {
            $output .= '<option value="'.$client->id.'">'.$client->sub_category_name.'</option>';
        }
        
      

    // print_r($output);
    // exit();
    echo $output;
}





}