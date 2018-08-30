<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Route
 *
 * @author solwin
 */
class Route extends CI_Model{
    //put your code here
    private $table = 'routes';
    
     function insert($data) {
        if ($this->db->insert($this->table, $data)) {
            return TRUE;
        }else{
            return $this->db->error();
        }
    }
}
