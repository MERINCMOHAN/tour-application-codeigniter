<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Favourite
 *
 * @author solwin
 */
class Favourite extends CI_Model {

    //put your code here
    private $table = 'favourite';

    function getStatus($userid, $tourid) {
        $this->db->where('tour_id', $tourid);
        $this->db->where('user_id', $userid);
        $query = $this->db->get($this->table);
        //print_r($query);die;
        if ($query->row()) {
            return $query->row();
        } else {
           return NULL;
        }
    }
    
    function getUserFav($userid){
        $this->db->where('user_id', $userid);
        $query = $this->db->get($this->table);
        //print_r($query);die;
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }else{
            return 0;
        } 
    }
    
    function addFavourite($data){
       // print_r($data);die;
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }
    
    function remove($id){
         $this->db->where('id', $id['id']);
        if ($this->db->delete($this->table)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }

}
