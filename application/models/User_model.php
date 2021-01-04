<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }

    public function log_in($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->from('users');
        $user = $this->db->get()->first_row();
        if ($user) {
            if (password_verify($password, $user->password)) {
                $this->update_login($user->id);
                return $user;
            }
        }
        return null;
    }

    public function get($id)
    {
        $this->db->where('id', $id);
        $this->db->from('users');
        $user = $this->db->get()->first_row();
        if ($user) {
            return $user;
        }
        return null;
    }

    public function get_by_email($email)
    {
        $this->db->where('email', $email);
        $this->db->from('users');
        $user = $this->db->get()->first_row();
        if ($user) {
            return $user;
        }
        return null;
    }

    public function get_by_reset_token($token)
    {
        $this->db->where('token', $token);
        $this->db->from('forgot_password');
        $this->db->order_by('created_at', 'desc');
        $reset_request = $this->db->get()->first_row();
        if ($reset_request) {
            if ($reset_request->created_at > date('Y-m-d H:i:s', strtotime('-2 hours'))) {
                return $this->get($reset_request->user_id);
            }
        }
        return null;
    }

    public function email_reset_link($email)
    {
        if ($user = $this->get_by_email($email)) {
            if (!$this->check_reset_limit($user->id)) {
                $this->session->set_flashdata('error', 'You have reached your password request limit for the day.');
                redirect('user/forgot_password');
            }
            $token = bin2hex(openssl_random_pseudo_bytes(10));
            $data = array(
                'user_id' => $user->id,
                'token' => $token,
            );
            $this->db->insert('forgot_password', $data);

            $this->load->library('email');
            $this->email->to($user->email);
            $this->email->subject('[Cocobox] Password Reset');
            $this->email->message($this->load->view('email/password_reset', compact('token'), true));

            $this->email->send();

            return;
        }
    }

    private function check_reset_limit($user_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('created_at >= CURDATE()');
        $this->db->from('forgot_password');
        $requests = $this->db->get()->num_rows();
        if ($requests > 4) {
            return false;
        }
        return true;
    }

    public function set_password($id, $password)
    {
        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $this->db->update('users');
        return $this->db->affected_rows();
    }

    public function update($id, $data)
    {
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('users');
        return $this->db->affected_rows();
    }

    public function update_login($id)
    {
        $data = array(
            'ip' => $_SERVER['REMOTE_ADDR'],
            'user_agent' => $_SERVER['HTTP_USER_AGENT'],
            'last_login' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s'),
            'modified_by' => $id,
        );
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('users');
        return $this->db->affected_rows();
    }
}
