<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author solwin
 */
class User extends CI_Model {

    //put your code here
    private $table = 'users';

    function check_login($user) {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('email', $user['email']);
        $password = $user['password'];
//        $this->db->where('password', $user['password']);
        $user = $this->db->get();
        $result = $user->result();
        if ($result) {
            if ($this->verifyHashedPassword($password, $result[0]->password)) {
                return $result;
            } else {
                return FALSE;
            }
//            return $result;
        } else {
//             die('email');
            return FALSE;
        }
    }

    function getHashedPassword($plainPassword) {
        return password_hash($plainPassword, PASSWORD_DEFAULT);
    }

    function verifyHashedPassword($plainPassword, $hashedPassword) {
        return password_verify($plainPassword, $hashedPassword) ? true : false;
    }

    function userRegister($data) {
        $register_user = array(
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $this->getHashedPassword($data['password']),
        );
//        print_r($register_user);die;

        if ($this->db->insert($this->table, $register_user)) {
            return TRUE;
        } else {
            return $this->db->error();
        }
    }

    function getAllUsers() {
        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }

        return $this->db->error();
    }

    function getUserEmail($email) {
        $sql = "SELECT * FROM $this->table WHERE email = ?";
        $emails = $this->db->query($sql, $email);

        return $emails->num_rows();
    }

    function update($data) {
        $this->db->set($data);
        $this->db->where("id", $data['id']);
        if ($this->db->update($this->table, $data)) {
            return TRUE;
        } else {
            return $this->db->error();
        }
    }

    function getUser($id) {
        $this->db->where('id', $id);
        $query = $this->db->get($this->table);
        if ($query) {
            return $query->row();
        } else {
            return $this->db->error();
        }
    }

    function delete($user) {
        // echo $tour;
        $this->db->where('id', $user);
        if ($this->db->delete($this->table)) {
            return TRUE;
        } else {
            return $this->db->error();
        }
    }

}
