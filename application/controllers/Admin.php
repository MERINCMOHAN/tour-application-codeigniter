<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author solwin
 */
class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Tour');
        $this->load->model('User');
        $this->load->model('Favourite');
        $this->load->model('Feature');
        $this->load->model('Country');
        $this->load->model('State');
        $this->load->model('City');
    }

    function index() {
        try {
            $data['tours'] = $this->Tour->getAllTours();
            $this->load->view('admin/header');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function addTour() {
        try {
//            print_r($this->input->post());
//            print_r($_FILES);die;
            if ($this->input->post()) {
                $features = implode(',', $this->input->post('features'));
                $route = implode('+', $this->input->post('routename'));
                $start_date = date('Y-m-d', strtotime($this->input->post('start_date')));
                $end_date = date('Y-m-d', strtotime($this->input->post('end_date')));
                $image = $this->do_upload();
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                    'price' => $this->test_input($this->input->post('price')),
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'features' => $features,
                    'destination' => $this->test_input($this->input->post('destination')),
                    'departure' => $this->test_input($this->input->post('departure')),
                    'type' => $this->test_input($this->input->post('type')),
                    'route' => $route,
                    'image' => $image['upload_data']['file_name']
                );
                if ($image != 'error') {
                    $tour = $this->Tour->insert($data);
                    if ($tour) {
                        $this->session->set_flashdata('Success', 'Tour Added Sucessfully');
                        redirect(base_url() . 'index.php/admin/');
                    } else {
                        $this->session->set_flashdata('Error', 'Error : Tour can not Addeed');
                        redirect(base_url() . 'index.php/admin/addTour');
                    }
                } else {
                    //$this->session->set_flashdata('Error', 'Error : Employee Insertion');
                    redirect(base_url() . 'index.php/admin/addTour');
                }
                //print_r($data);die;
            }
            $data['states'] = $this->State->getAll();
            $data['cities'] = $this->City->getAllCity();
            $data['features'] = $this->Feature->getAllFeatures();
            $data['countries'] = $this->Country->getAllCountries();
            //print_r($data);
            $this->load->view('admin/header');
            $this->load->view('admin/addTour', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function editTour($id = FALSE) {
        try {
//            print_r($this->input->post());die;
            if ($this->input->post()) {
                $features = implode(',', $this->input->post('features'));
                $route = implode('+', $this->input->post('routename'));
                $start_date = date('Y-m-d', strtotime($this->input->post('start_date')));
                $end_date = date('Y-m-d', strtotime($this->input->post('end_date')));
                if ($_FILES['tour_picture']['name'] != '') {
                    $image = $this->do_upload();
                    $tour_image = $image['upload_data']['file_name'];
                    // echo $tour_image; echo "selected"; die;
                } else {
                    $tour_image = $this->input->post('tourImage');
                    //  echo $tour_image; echo "not selected";die;
                }
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                    'price' => $this->test_input($this->input->post('price')),
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'features' => $features,
                    'destination' => $this->test_input($this->input->post('destination')),
                    'departure' => $this->test_input($this->input->post('departure')),
                    'type' => $this->test_input($this->input->post('type')),
                    'route' => $route,
                    'image' => $tour_image
                );
                if ($tour_image != 'error') {
                    $tour = $this->Tour->update($data, $this->input->post('id'));
                    if ($tour) {
                        $this->session->set_flashdata('Success', 'Tour Updated Sucessfully');
                        redirect(base_url() . 'index.php/admin/');
                    } else {
                        $this->session->set_flashdata('Error', 'Error : Tour can not Updated');
                        redirect(base_url() . 'index.php/admin/editTour');
                    }
                } else {
                    redirect(base_url() . 'index.php/admin/editTour');
                }
            }
            $data['states'] = $this->State->getAll();
            $data['cities'] = $this->City->getAllCity();
            $data['features'] = $this->Feature->getAllFeatures();
            $data['countries'] = $this->Country->getAllCountries();
            $data['tour'] = $this->Tour->getTour($id);
            //print_r($data);
            $this->load->view('admin/header');
            $this->load->view('admin/editTour', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function deleteTour($id = FALSE) {
        try {
            $tour_id = $id;
            $delete = $this->Tour->delete($tour_id);
            if ($delete) {
                $this->session->set_flashdata('Success', 'Tour Deleted Sucessfully');
                redirect(base_url() . 'index.php/admin/');
            } else {
                $this->session->set_flashdata('Error', 'Error : Tour can not Deleted');
                redirect(base_url() . 'index.php/admin/');
            }
            //echo json_encode($delete);
            //   die;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    function features() {
        $data['features'] = $this->Feature->getAllFeatures();
        $this->load->view('admin/header');
        $this->load->view('Features/index', $data);
        $this->load->view('admin/footer');
    }

    function addFeature() {
        try {
            //print_r($this->input->post());die;
            if ($this->input->post()) {
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                );
                //print_r($data);die;
                $feature = $this->Feature->insert($data);
                if ($feature) {
                    $this->session->set_flashdata('Success', 'Feature Added Sucessfully');
                    redirect(base_url() . 'index.php/admin/features');
                } else {
                    $this->session->set_flashdata('Error', 'Error : Feature can not Addeed');
                    redirect(base_url() . 'index.php/admin/addFeature');
                }
            }

            //print_r($data);
            $this->load->view('admin/header');
            $this->load->view('Features/add');
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function editFeature($id = FALSE) {
        try {
            //print_r($this->input->post());echo $id;die;
            if ($this->input->post()) {
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                    'id' => $this->test_input($this->input->post('id')),
                );
                //print_r($data);die;
                $feature = $this->Feature->update($data);
                if ($feature) {
                    $this->session->set_flashdata('Success', 'Feature Update Sucessfully');
                    redirect(base_url() . 'index.php/admin/features');
                } else {
                    $this->session->set_flashdata('Error', 'Error : Feature can not Updated');
                    redirect(base_url() . 'index.php/admin/editFeature');
                }
            }
            $data['feature'] = $this->Feature->getFeature($id);
            //print_r($data);
            $this->load->view('admin/header');
            $this->load->view('Features/update', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function deleteFeature($id = FALSE) {
        try {
            $delete = $this->Feature->delete($id);
            if ($delete) {
                $this->session->set_flashdata('Success', 'Feature Deleted Sucessfully');
                redirect(base_url() . 'index.php/admin/features');
            } else {
                $this->session->set_flashdata('Error', 'Error : Feature can not Deleted');
                redirect(base_url() . 'index.php/admin/features');
            }
            //echo json_encode($delete);
            //   die;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function do_upload() {
        try {
            $config['upload_path'] = './images/tours/';
            $config['allowed_types'] = 'gif|jpg|png';
//            $config['max_size'] = 1000;
//            $config['max_width'] = 1024;
//            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('tour_picture')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('Error', $error['error']);
                return 'error';
//                        $this->load->view('upload_form', $error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                return $data;
//                        $this->load->view('upload_success', $data);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function users() {
        try {
            $data['users'] = $this->User->getAllUsers();
            $this->load->view('admin/header');
            $this->load->view('admin/users', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function editUser($id = FALSE) {
        try {
            //print_r($this->input->post());echo $id;die;
            if ($this->input->post()) {
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                    'id' => $this->test_input($this->input->post('id')),
                    'email' => $this->test_input($this->input->post('email')),
                );
                //print_r($data);die;
                $feature = $this->User->update($data);
                if ($feature) {
                    $this->session->set_flashdata('Success', 'User has been Update Sucessfully');
                    redirect(base_url() . 'index.php/admin/users');
                } else {
                    $this->session->set_flashdata('Error', 'Error : User can not Updated');
                    redirect(base_url() . 'index.php/admin/editUser');
                }
            }
            $data['user'] = $this->User->getUser($id);
            $this->load->view('admin/header');
            $this->load->view('admin/editUser', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function deleteUser($id = FALSE) {
        try {
            $favouritetours = $this->Favourite->getUserFav($id);
            if ($favouritetours > 0) {
                $this->session->set_flashdata('Error', 'Error : User Have Favourite Property.Can not Deleted');
                redirect(base_url() . 'index.php/admin/users');
            } else {
                $delete = $this->User->delete($id);
                if ($delete) {
                    $this->session->set_flashdata('Success', 'User has been Deleted Sucessfully');
                    redirect(base_url() . 'index.php/admin/users');
                } else {
                    $this->session->set_flashdata('Error', 'Error : User has not been Deleted');
                    redirect(base_url() . 'index.php/admin/users');
                }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function multiple() {

        $this->load->view('admin/multipleUpload');
    }

    function imageUploadPost() {
        try {
            $config['upload_path'] = './images/demo/';
            $config['allowed_types'] = 'gif|jpg|png';
//            $config['max_size'] = 1000;
//            $config['max_width'] = 1024;
//            $config['max_height'] = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('Error', $error['error']);
                return 'error';
//                        $this->load->view('upload_form', $error);
            } else {
                $data = array('upload_data' => $this->upload->data());
                return $data;
//                        $this->load->view('upload_success', $data);
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }

        exit;
    }
    
    function insertImage(){
        try{
             if ($this->input->post()) {
                 $tour_id = $_SESSION['last_insert_id'];
                 $data = array(
                     'name' => $this->test_input($this->input->post('name')),
                     'tour_id' => $tour_id
                 );
                 $image = $this->Image->insert($data);
             }
        }catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    function addmultipleImages() {
        try {
//            print_r($this->input->post());
//            print_r($_FILES);die;
            if ($this->input->post()) {
                $features = implode(',', $this->input->post('features'));
                $route = implode('+', $this->input->post('routename'));
                $start_date = date('Y-m-d', strtotime($this->input->post('start_date')));
                $end_date = date('Y-m-d', strtotime($this->input->post('end_date')));
                $image = $this->do_upload();
                $data = array(
                    'name' => $this->test_input($this->input->post('name')),
                    'price' => $this->test_input($this->input->post('price')),
                    'start_date' => $start_date,
                    'end_date' => $end_date,
                    'features' => $features,
                    'destination' => $this->test_input($this->input->post('destination')),
                    'departure' => $this->test_input($this->input->post('departure')),
                    'type' => $this->test_input($this->input->post('type')),
                    'route' => $route,
                    'image' => $image['upload_data']['file_name']
                );
                if ($image != 'error') {
                    $tour = $this->Tour->insert($data);
                    if ($tour) {
                        $this->session->set_userdata('last_insert_id',$this->db->insert_id());
                        $this->session->set_flashdata('Success', 'Tour Added Sucessfully');
                        redirect(base_url() . 'index.php/admin/');
                    } else {
                        $this->session->set_flashdata('Error', 'Error : Tour can not Addeed');
                        redirect(base_url() . 'index.php/admin/addTour');
                    }
                } else {
                    //$this->session->set_flashdata('Error', 'Error : Employee Insertion');
                    redirect(base_url() . 'index.php/admin/addTour');
                }
                //print_r($data);die;
            }
            $data['states'] = $this->State->getAll();
            $data['cities'] = $this->City->getAllCity();
            $data['features'] = $this->Feature->getAllFeatures();
            $data['countries'] = $this->Country->getAllCountries();
            //print_r($data);
            $this->load->view('admin/header');
            $this->load->view('admin/MulImgaddTour', $data);
            $this->load->view('admin/footer');
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
