<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of State
 *
 * @author solwin
 */
class State extends CI_Model{
    //put your code here
    private $table = 'states';
    function getAllStateByCountries($country){
        $sql = "SELECT * FROM $this->table WHERE country_id = ? ORDER BY name asc";
        $states = $this->db->query($sql,array($country));
        if ( ! $states){
            $error = $this->db->error();
            return $error;
        } else {
           return $states->result(); 
        }
    }
    
     function getState($id = FALSE) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $state = $this->db->query($sql,array($id));
        if(!$state){
            return $this->db->error();
        }else{
            return $state->row();
        }
    }
    
    function getAll(){
         $countries = $this->db->query("SELECT * FROM $this->table ORDER BY name asc");
       return $countries->result();
    }
}
