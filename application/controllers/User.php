<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('home');
    }

    public function signup()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() !== false) {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'created' => date('Y-m-d H:i:s'),
                );
                $id = $this->user_model->create($data);
                $user = $this->user_model->log_in($data['email'], $this->input->post('password'));
                if ($user) {
                    $this->session->set_userdata('id', $user->id);
                    $this->session->set_userdata('user', $user);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('error', 'Failed to create user account.');
                    redirect('user/signup');
                }
            }
        }
        set_title('Sign Up');
        $this->load->view('user/signup');
    }

    public function login()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() !== false) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->user_model->log_in($email, $password);
                if ($user) {
                    $this->session->set_userdata('id', $user->id);
                    $this->session->set_userdata('user', $user);
                    redirect(base_url());
                } else {
                    $this->session->set_flashdata('error', 'Invalid login.');
                    redirect('user/login');
                }
            }
        }
        set_title('Log In');
        $this->load->view('user/login');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function forgot_password()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() !== false) {
                $email = $this->input->post('email');
                $this->user_model->email_reset_link($email);
                $this->session->set_flashdata('info', 'If there is an account associated with this email, a reset link has been sent.');
                redirect('user/forgot_password');
            }
        }
        set_title('Forgot Password');
        $this->load->view('user/forgot_password');
    }

    public function reset_password($token)
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|matches[password]');

            if ($this->form_validation->run() !== false) {
                $user = $this->user_model->get_by_reset_token($token);
                if ($user) {
                    $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                    if ($this->user_model->set_password($user->id, $password)) {
                        $this->session->set_flashdata('success', 'Password has been reset. You may now log in.');
                    } else {
                        $this->session->set_flashdata('error', 'Password reset failed.');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Reset request has expired or is invalid.');
                }
                redirect('user/login');
            }
        }
        set_title('Reset Password');
        $this->load->view('user/reset_password');
    }
}
