<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends Authenticated_Controller
{

    public function index()
    {
        set_title('Page');
        $this->load->view('page');
    }
}
