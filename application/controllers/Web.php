<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('my_model', 'mm');
    }
    function index() {                
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    function about() {    
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    function painting($i) {        
        $data['paint'] = $i;

        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('painting',$data);
        $this->load->view('templates/footer');
    }    
    
    function views() {
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('views');
        $this->load->view('templates/footer');
    }

    function contact() {
        $this->load->view('templates/header');
        $this->load->view('templates/menu');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }

    function purchasepainting(){
        //-------------
        $this->email->set_mailtype("html");
        $painting = $this->input->post('txtPicture_id');

        $msg_ = "<h2 style='color: #000090'>Request to Purchase Painting :</h2> <br /><span style='font-size: 13px; color: #121212'>";
        $msg_ = $msg_ . "Want to purchase this Painting <br>";
        $msg_ = $msg_ . "<img src='". base_url('assets/images/'.$painting."'") . "' width='200'><br /><br />";
        $msg_ = $msg_ . "------------------------ <br />Name: ";
         $msg_ = $msg_ . $this->input->post('txtName') . "<br /> Email: ";
        $msg_ = $msg_ . $this->input->post('txtEmail') . "<br /> Mobile: ";
        $msg_ = $msg_ . "From - " . $this->input->post('txtMobile') . "<br />Address: ";
        $msg_ = $msg_ . $this->input->post('txtAddress') . "<br />";

        $from_ = $this->input->post('txtEmail');
        $name_ = $this->input->post('txtName');

        $this->email->from($from_, $name_);
        $this->email->to('purchasepaintings@himalayanpaintings.com');
        $this->email->cc('nitin.d12@gmail.com');

        $this->email->subject('Request to Purchase Painting');
        $this->email->message($msg_);

        if ($this->email->send()) {
            $ret_data = "<span style='color: #009000'>Thanks for showing interest in our paintings. <br>We will get back very soon...</span>";
        } else {
            $ret_data = "<span style='color: #ff0000'>X: Server Error !! Try Again...</span>";
        }
        //-------------
        echo $ret_data;
    }
    function uc_(){
        $this->load->view('error');
    }
  
}

