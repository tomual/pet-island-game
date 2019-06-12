<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread_model extends CI_Model {

    public function create($topic, $title, $message) {
        $post_id = $this->posts_model->create($message);
        if (!$post_id) {
            return null;
        }
        $data = array(
            'post_id' => $post_id,
            'topic' => $topic,
            'title' => $title
        );
        $this->db->insert('threads', $data);
        return $this->db->insert_id();
    }

    function get($id) {
        $this->db->select('threads.*');
        $this->db->select('posts.message, posts.created, posts.created_by, posts.modified, posts.modified_by');
        $this->db->where('threads.id', $id);
        $this->db->from('threads');
        $this->db->join('posts', 'threads.post_id = posts.id', 'left');
        $result = $this->db->get();
        return $result->first_row();
    }

    function get_by_topic($topic) {
        $this->db->select('threads.*');
        $this->db->select('posts.message, posts.created');
        $this->db->where('threads.topic', $topic);
        $this->db->from('threads');
        $this->db->join('posts', 'threads.post_id = posts.id', 'left');
        $result = $this->db->get();
        return $result->first_row();
    }

    function update($post_id, $title, $message) {
        $update = $this->posts_model->update($post_id, $message);
        $data = array(
            'title' => $title,
            'message' => $message,
            'modified_by' => $this->user->id
        );
        $this->db->where('id', $id);
        $this->db->update('threads', $data);
        return $this->db->affected_rows();
    }
}
