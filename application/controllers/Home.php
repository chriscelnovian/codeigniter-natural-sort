<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /*
    |-------------------------------------------------------------------
    | Construct
    |-------------------------------------------------------------------
    | 
    */
    function __construct()
    {
        parent::__construct();
        $this->load->model('home_model');
    }

    /*
    |-------------------------------------------------------------------
    | Index
    |-------------------------------------------------------------------
    | 
    */
	function index()
	{
        $data['title'] = 'Codeigniter 3 - ';

        $this->load->view('frontend/header');
        $this->load->view('frontend/content');
        $this->load->view('frontend/footer');
    }
    
}
