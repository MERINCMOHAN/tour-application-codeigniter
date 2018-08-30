<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users
 *
 * @author solwin
 */
class Users extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User');
    }

    function index() {
        try {
            $this->load->view('user/header');
            $this->load->view('user/index');
            $this->load->view('user/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function userRegistration() {
        try {
            
            $data = array(
                'name' => $this->test_input($this->input->post('name')),
                'email' => $this->test_input($this->input->post('email')),
                'password' => $this->test_input($this->input->post('password')),
            );
            //print_r($data);die;
            $user = $this->User->userRegister($data);
//            print_r($user);die;
            if ($user) {
                $this->session->set_flashdata('Success', 'User Register Sucessfully');
                redirect(base_url() . 'index.php/users');
            } else {
                $this->session->set_flashdata('Error', 'Error : User can not Register');
                redirect(base_url() . 'index.php/users');
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     function checkEmailExist() {
        $email = $this->input->post('email');
        //$status = $this->input->post('updateStatus');
//        $email_flag = '1';
        $employee_emails = $this->User->getUserEmail($email);
        echo $employee_emails;
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function authentication() {
        try {
            $data = array(
                'email' => $this->input->post('lgnemail'),
                'password' => $this->input->post('lgnpassowrd')
            );
            $access = $this->User->check_login($data);
            if($access){
                foreach ($access as $user){
                    $this->session->set_userdata('user_id',$user->id);
                    $this->session->set_userdata('email',$user->email);
                    $this->session->set_userdata('name',$user->name);
                }
                $this->session->set_flashdata('Success', 'Log In Sucessfully');
                redirect(base_url() . 'index.php/tours');
                
            }else{
                $this->session->set_flashdata('Error', 'Error : Please  provide valid Credentials');
                redirect(base_url() . 'index.php/users');
            }
            print_r($access);die;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    function logout(){
        unset($_SESSION['user_id']);
        session_destroy();
    }

}
