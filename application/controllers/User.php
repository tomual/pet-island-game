<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index()
	{
		$this->load->view('home');
	}

    public function signup()
    {
        $this->load->helper(array('form', 'url'));
        if($this->input->method() == 'post') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Group Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() !== FALSE)
            {
                $data = array(
                    'user_id' => 1,
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                );
                $user_id = $this->user_model->create($data);
                $user = $this->user_model->log_in($data['email'], $this->input->post('password'));
                if($user) {
                    $this->session->set_userdata('user_id', $user->user_id);
                    $this->session->set_userdata('user', $user);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user account.');
                }
            }
        }
        $this->load->view('users/signup');
    }

    public function login()
    {
        $this->load->helper(array('form', 'url'));
        if($this->input->method() == 'post') {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() !== FALSE)
            {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->user_model->log_in($email, $password);
                if($user) {
                    $this->session->set_userdata('user_id', $user->user_id);
                    $this->session->set_userdata('user', $user);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('error', 'Invalid login.');
                }
            }
        }
        $this->load->view('users/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
