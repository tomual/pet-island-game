<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currency_model extends CI_Model {

    public function add_beans($user_id, $beans) {
        $this->db->where('user_id', $user_id);
        $this->db->from('currency');
        $wallet = $this->db->get()->first_row();
        if(!$wallet) {
            $data = [
                'user_id' => $user_id,
                'beans' => $beans
            ];
            $this->db->insert('currency', $data);
        } else {
            $this->db->set('beans', $wallet->beans + $beans);
            $this->db->where('user_id', $user_id);
            $this->db->update('currency');
        }
    }

    public function get_beans($user_id = null)
    {
        if(!$user_id) {
            $user_id = $this->user->id;
        }

        $this->db->where('user_id', $user_id);
        $this->db->from('currency');
        $wallet = $this->db->get()->first_row();
        if($wallet) {
            return $wallet->beans;
        } 
        return 0;
    }
}
