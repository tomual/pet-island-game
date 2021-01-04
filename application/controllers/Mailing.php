<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mailing extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mailing_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->input->method() == 'post') {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() !== false) {
                $data = array(
                    'email' => $this->input->post('email'),
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                    'created' => date('Y-m-d H:i:s'),
                    'created_by' => $this->user->id ?? null,
                );
                if ($this->mailing_model->create($data)) {
                    $this->session->set_flashdata('success', 'We\'ll keep you updated.');
                } else {
                    $this->session->set_flashdata('error', 'Adding the email to the mailing list failed.');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid email.');
            }
        }
        redirect('/');
    }
}
