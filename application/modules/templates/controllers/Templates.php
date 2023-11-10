<?php
class Templates extends MX_Controller 
{

    public function test()
    {
        $data="";
        $this->admin($data);
    }


    public function public_bootstrap($data)
    {
        $this->load->view('home' ,$data);
    }

    public function public_jqm($data)
    {
        $this->load->view("public_jqm",$data);
    }

    public function admin($data)
    {
        
        
        $this->load->view("admin",$data);
    }

    public function member($data)
    {
        
        
        $this->load->view("member",$data);
    }
    public function member_products($data)
    {
        
        
        $this->load->view("member_products",$data);
    }




}