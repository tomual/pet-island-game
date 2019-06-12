<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts_model extends CI_Model {

    public function create($message) {
        $data = array(
            'message' => $message,
            'created_by' => $this->user->id
        );
        $this->db->insert('posts', $data);
        return $this->db->insert_id();
    }

    function get($id) {
        $this->db->where('id', $id);
        $this->db->from('posts');
        $result = $this->db->get();
        return $result->first_row();
    }

    function update($id, $title, $message) {
        $data = array(
            'title' => $title,
            'message' => $message,
            'modified_by' => $this->user->id
        );
        $this->db->where('id', $id);
        $this->db->update('posts', $data);
        return $this->db->affected_rows();
    }
}
