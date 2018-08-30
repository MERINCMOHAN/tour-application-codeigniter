<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Country
 *
 * @author solwin
 */
class Country extends CI_Model{
    //put your code here
    private $table = 'countries';
    function getAllCountries(){
       $countries = $this->db->query("SELECT * FROM $this->table ORDER BY name asc");
       return $countries->result();
    }
    
    function getCountry($id = FALSE) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $country = $this->db->query($sql,array($id));
        if(!$country){
            return $this->db->error();
        }else{
            return $country->row();
        }
    }
}
