<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MY_Controller
{

    public function index()
    {
        set_title('Welcome');
        $this->load->view('home');
    }
}
