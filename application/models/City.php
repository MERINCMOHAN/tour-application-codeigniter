<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of City
 *
 * @author solwin
 */
class City extends CI_Model{
    //put your code here
    private $table = 'cities';
    
    function getAllCity(){
        $countries = $this->db->query("SELECT * FROM $this->table ORDER BY name asc");
       return $countries->result();
    }
    
}
