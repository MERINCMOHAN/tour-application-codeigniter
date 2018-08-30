<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feature
 *
 * @author solwin
 */
class Feature extends CI_Model {
    //put your code here
    private $table = 'features';
    function getAllFeatures(){
        $features = $this->db->query("SELECT * FROM $this->table ORDER BY name asc");
       return $features->result();
    }
    
    function insert($data) {
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }

    function delete($feature) {
       // echo $tour;
        $this->db->where('id', $feature);
        if ($this->db->delete($this->table)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }

    function update($data) {
        $this->db->set($data);
        $this->db->where("id", $data['id']);
        if ($this->db->update($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }
    
    function getFeature($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->table);
        if ($query) {
            return $query->row();
        }else{
             return $this->db->error();
        }
    }
}
