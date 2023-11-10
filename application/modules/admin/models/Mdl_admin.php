<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mdl_admin extends CI_Model
{

function __construct() {
parent::__construct();
}

    var $table = "tbl_users";  
      var $select_column = array("tbl_users.id", "username", "email","status", "created_at");  
        var $order_column = array(null, "tbl_users.id", "username", null, null); 

        //customer list 

        var $customer_table = "tbl_customers";  
        var $customer_select_column = array("tbl_customers.id", "first_name", "customer_id", "last_name", "phone", "email", "address", "status", "created_at");  
        var $customer_order_column = array(null, "tbl_customers.id", "first_name", null, null); 


        var $category_order_column = array(null, "tbl_product_category.id", "tbl_product_category.category_name", null, null); 
        
         var $order_table = "tbl_order";  
        var $order_select_column = array("tbl_order.id as order_id", "tbl_order.customer_id", "tracking_id", "promo_id", "promo_discount", "sub_total","order_grand_total","order_payment_method","order_status","tbl_order.status", "tbl_order.created_at","tbl_customers.first_name","tbl_customers.last_name","tbl_customers.customer_id","tbl_order.customer_type");  

        var $order_select_column_member = array("tbl_order.id as order_id", "tbl_order.customer_id", "tracking_id", "promo_id", "promo_discount", "sub_total","order_grand_total","order_payment_method","order_status","tbl_order.status", "tbl_order.created_at","tbl_member.member_name","tbl_order.customer_type", "tbl_order.cv");  
        var $order_order_column = array(null, "tbl_order.id", "tracking_id", null, null); 


        // sub category code


        var $product1_table = "tbl_products";  
        var $product1_select_column = array("tbl_products.id as p_id", "product_id","product_name", "type", "sub_image", "tbl_products.status", "tbl_products.created_at","description", "tbl_product_category.category_name");  
        var $product1_order_column = array(null, "p_id", "product_name", null, null);


        // sub category
         var $sub_category_table = "tbl_sub_category";  
        var $sub_category_select_column = array("tbl_sub_category.id", "category_id","tbl_product_category.category_name", "tbl_product_category.id as productID","sub_category_name","tbl_sub_category.status", "tbl_sub_category.sub_category_image", "tbl_sub_category.created_at");  
        var $sub_category_order_column = array(null, "tbl_sub_category.id", "tbl_sub_category.sub_category_name", null, null); 
        // end subcategory



public function validate_credentials($email, $password){
        $sql = "SELECT * FROM tbl_users WHERE email='".$email."' AND password='".md5($password)."' AND user_type = 'Admin'";
          if($query=$this->db->query($sql))
          {
              return $query->row_array();
          }
          else{
            return false;
          }
    
    }


     // user list 
    function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from($this->table);
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("username", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table); 

           return $this->db->count_all_results();  
      }

      // end user list 

           // customer list 
    function customer_make_query()  
      {  
           $this->db->select($this->customer_select_column);  
           $this->db->from($this->customer_table);
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->customer_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function customer_make_datatables(){  
           $this->customer_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function customer_get_filtered_data(){  
           $this->customer_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function customer_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->customer_table); 

           return $this->db->count_all_results();  
      }

      // end cusotmer list 



                     // customer list 
    function product_make_query($id)  
      {  
           $this->db->select($this->product_select_column);  
           $this->db->from($this->product_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_shop_products.category_id');
           $this->db->join('tbl_products','tbl_products.id = tbl_shop_products.sub_category_id');
           $this->db->join('tbl_shops','tbl_shops.id = tbl_shop_products.shop_id');
           $this->db->where('tbl_shop_products.shop_id = '.$id.'');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_products.product_name", $_POST["search"]["value"]);  
                //$this->db->or_like("tbl_shops.shop_name", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->product_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function product_make_datatables($id){  
           $this->product_make_query($id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function product_get_filtered_data($id){  
           $this->product_make_query($id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function product_get_all_data($id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->product_table); 

           return $this->db->count_all_results();  
      }

      // end cusotmer list


               // category list 
    function category_make_query()  
      {  
           $this->db->select('*');  
           $this->db->from('tbl_product_category');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("category_name", $_POST["search"]["value"]);  
                $this->db->or_like("status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->category_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function category_make_datatables(){  
           $this->category_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function category_get_filtered_data(){  
           $this->category_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function category_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('tbl_product_category'); 

           return $this->db->count_all_results();  
      }

      // end category list 
      
      
                           // order list 
    function order_make_query()  
      {  
          $this->db->select($this->order_select_column);  
          $this->db->from($this->order_table);
          $this->db->join('tbl_customers','tbl_customers.customer_id = tbl_order.customer_id');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tracking_id", $_POST["search"]["value"]);  
                // $this->db->or_like("", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_order.id', 'DESC');  
           }  
      }  
      function order_make_datatables(){  
           $this->order_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function order_get_filtered_data(){  
           $this->order_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function order_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($order_table); 

           return $this->db->count_all_results();  
      }

      // end order list 


                                 // order list 
    function order_make_query_member()  
      {  
          $this->db->select($this->order_select_column_member);  
          $this->db->from($this->order_table);
          $this->db->join('tbl_member','tbl_member.member_code = tbl_order.customer_id');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tracking_id", $_POST["search"]["value"]);  
                // $this->db->or_like("", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('tbl_order.id', 'DESC');  
           }  
      }  
      function order_make_datatables_member(){  
           $this->order_make_query_member();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function order_get_filtered_data_member(){  
           $this->order_make_query_member();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function order_get_all_data_member()  
      {  
           $this->db->select("*");  
           $this->db->from($order_table); 

           return $this->db->count_all_results();  
      }

      // end order list 





      // sub category code

           function product1_make_query()  
      {  
           $this->db->select($this->product1_select_column);  
           $this->db->from($this->product1_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_products.category_id');
           // $this->db->join('tbl_sub_category','tbl_sub_category.id = tbl_products.sub_cat_id');
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_products.product_name", $_POST["search"]["value"]);  
                $this->db->or_like("tbl_products.status", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->product1_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('p_id', 'DESC');  
           }  
      }  
      function product1_make_datatables(){  
           $this->product1_make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function product1_get_filtered_data(){  
           $this->product1_make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function product1_get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from($this->product1_table); 

           return $this->db->count_all_results();  
      }


      // end subcategory





      


      // sub category

      function sub_category_make_query($id)  
      {  
           $this->db->select($this->sub_category_select_column);  
           $this->db->from($this->sub_category_table);
           $this->db->join('tbl_product_category','tbl_product_category.id = tbl_sub_category.category_id');
           $this->db->where('tbl_sub_category.id = '.$id.'');
          
           
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("tbl_sub_category.sub_category_name", $_POST["search"]["value"]);  
                $this->db->or_like("tbl_product_category.category_name", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->sub_category_order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }  
      function sub_category_make_datatables($id){  
           $this->sub_category_make_query($id);  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  
      function sub_category_get_filtered_data($id){  
           $this->sub_category_make_query($id);  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function sub_category_get_all_data($id)  
      {  
           $this->db->select("*");  
           $this->db->from($this->sub_category_table); 

           return $this->db->count_all_results();  
      }

      // End sub category



}