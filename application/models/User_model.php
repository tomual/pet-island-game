<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function create($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function log_in($email, $password) {
        $this->db->where('email', $email);
        $this->db->from('users');
        $user = $this->db->get()->first_row();
        if($user) {
            if(password_verify($password, $user->password)) {
                return $user;
            }
        }
        return null;
    }
}
