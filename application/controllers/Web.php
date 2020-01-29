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

    function uc_(){
        $this->load->view('error');
    }
  
}

