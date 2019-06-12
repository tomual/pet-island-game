<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reply_model extends CI_Model {

    public function create($thread_id, $message) {
        $post_id = $this->posts_model->create($message);
        if (!$post_id) {
            return null;
        }
        $data = array(
            'post_id' => $post_id,
            'thread_id' => $thread_id
        );
        $this->db->insert('replies', $data);
        return $this->db->insert_id();
    }

    function get($id) {
        $this->db->where('id', $id);
        $this->db->from('replies');
        $result = $this->db->get();
        return $result->first_row();
    }

    function update($id, $message) {
        $data = array(
            'message' => $message,
            'modified_by' => $this->user->id
        );
        $this->db->where('id', $id);
        $this->db->update('replies', $data);
        return $this->db->affected_rows();
    }

    function get_by_thread($thread_id)
    {
        $this->db->select('replies.*');
        $this->db->select('posts.message, posts.created, posts.created_by, posts.modified, posts.modified_by');
        $this->db->where('thread_id', $thread_id);
        $this->db->from('replies');
        $this->db->join('posts', 'replies.post_id = posts.id', 'left');
        $this->db->order_by('post_id');
        $result = $this->db->get()->result();
        dd($this->db->last_query());
        return $result;
    }
}
