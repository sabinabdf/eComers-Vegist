<?php 
class FrontEnd extends CI_Controller
{
    function index(){
        $this->load->view('frontEnd/index');
    }
    function shop(){
        $this->load->view('frontEnd/shop');
    }
    function customerRegistration(){
        $this->load->view('frontEnd/customerRegistration');
    }
    function customerLogin(){
        $this->load->view('frontEnd/customerLogin');
    }
    function wishList(){
        $this->load->view('frontEnd/wishList');
    }
    function cart(){
        $this->load->view('frontEnd/cart');
    }
    function checkout(){
        $this->load->view('frontEnd/checkout');
    }
}


?>