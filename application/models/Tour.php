<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tour
 *
 * @author solwin
 */
class Tour extends CI_Model {
    //put your code here
    private $table = 'tours';
    
    function getAllTours(){
        //$this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

        return $this->db->error();
    }
    
    function fetchAllTours($limit,$start){
        $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

        return $this->db->error();
    }
    
    function getTour($tourid){
        $this->db->where('id',$tourid);
        $query = $this->db->get($this->table);
        if ($query) {
            return $query->row();
        }else{
             return $this->db->error();
        }
    }
            
    function countTours() {
        return $this->db->count_all($this->table);
    }
    
     function insert($data) {
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }

    function delete($tour) {
       // echo $tour;
        $this->db->where('id', $tour);
        if ($this->db->delete($this->table)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }

    function update($data, $tour_id) {
        $this->db->set($data);
        $this->db->where("id", $tour_id);
        if ($this->db->update($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }
}
