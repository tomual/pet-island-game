<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends Authenticated_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->edit();
    }

    public function edit()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('current_password', 'Current Password', 'required');
            $this->form_validation->set_rules('password', 'Password', 'min_length[6]');
            $this->form_validation->set_rules('password2', 'Password Confirmation', 'matches[password]');

            if ($this->form_validation->run() !== false) {
                $email = $this->input->post('email');
                $password = $this->input->post('password');
                $user = $this->user_model->log_in($this->user->email, $this->input->post('current_password'));
                if ($user) {
                    // If they entered a different email, check availability
                    if ($user->email != $email) {
                        if ($this->user_model->get_by_email($email)) {
                            $this->session->set_flashdata('error', 'This email is already associated with an account.');
                            redirect(base_url('settings/edit'));
                        }
                    }
                    $data = array(
                        'email' => $email,
                    );
                    if ($password) {
                        $data['password'] = password_hash($password, PASSWORD_DEFAULT);
                    }
                    $update = $this->user_model->update($user->id, $data);
                    if ($update) {
                        $this->session->set_userdata('user', $this->user_model->get_by_email($email));
                        $this->session->set_flashdata('success', 'Account has been updated.');
                    }
                    $this->session->set_userdata('id', $user->id);
                    redirect(base_url('settings/edit'));
                } else {
                    $this->session->set_flashdata('error', 'Incorrect current password.');
                }
            }
        }
        $this->load->view('settings');
    }
}
