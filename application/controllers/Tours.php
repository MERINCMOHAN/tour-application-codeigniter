<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tours
 *
 * @author solwin
 */
class Tours extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model('Tour');
        $this->load->model('Feature');
        $this->load->model('Country');
        $this->load->model('State');
        $this->load->model('Favourite');
        $this->load->model('City');
    }
    
    function index1(){
        try {
            $data['states'] = $this->State->getAll();
            $data['cities'] = $this->City->getAllCity();
            $data['features'] = $this->Feature->getAllFeatures();
            $data['countries'] = $this->Country->getAllCountries();
            $data['tours'] = $this->Tour->getAllTours();
            $this->load->view('tour/header');
            $this->load->view('tour/index',$data);
            $this->load->view('tour/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     function index(){
        try {
            $limit_per_page = 6;
            $start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $total = $this->Tour->countTours();
            if ($total > 0) {
                $config['base_url'] = base_url() . 'index.php/tours/index';
                $config['total_rows'] = $total;
                $config['per_page'] = $limit_per_page;
                $config["uri_segment"] = 3;
                $config['reuse_query_string'] = TRUE;
                $this->pagination->initialize($config);
                $data["links"] = $this->pagination->create_links();
                $data['tours'] = $this->Tour->fetchAllTours($limit_per_page,$start_index);
            }
            $data['states'] = $this->State->getAll();
            $data['cities'] = $this->City->getAllCity();
            $data['features'] = $this->Feature->getAllFeatures();
            $data['countries'] = $this->Country->getAllCountries();
            $this->load->view('tour/header');
            $this->load->view('tour/index',$data);
            $this->load->view('tour/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function addToFavourite($id=FALSE){
        try {
             if ($this->input->post()) {
                 $data = array(
                    'user_id' => $this->test_input($this->input->post('user_id')),
                    'tour_id' => $this->test_input($this->input->post('tour_id')),
                );
             }
             $favourite = $this->Favourite->addFavourite($data);
             if($favourite){
                 echo "sucess";
             }else{
                 echo "nodata";
             }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    
    }
    
    function removeFavourite(){
      try {
             if ($this->input->post()) {
                 $data = array(
                    'id' => $this->test_input($this->input->post('id')),
                );
             }
             $favourite = $this->Favourite->remove($data);
             if($favourite){
                 echo "sucess";
             }else{
                 echo "nodata";
             }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }  
    }
    
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
