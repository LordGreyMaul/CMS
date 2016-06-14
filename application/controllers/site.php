<?php
/**
 * Created by PhpStorm.
 * User: grahammorby-raybould
 * Date: 14/06/2016
 * Time: 16:02
 */

class Site extends CI_Controller {

    function index() {
        $this->load->model('site_model');
        $data['records'] = $this->site_model->getAll();
        $this->load->view('home');
    }

    
    
}