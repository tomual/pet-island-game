<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->user = null;
        if($this->session->userdata('user_id')) {
            $this->user = $this->session->userdata('user');
        }
    }
}
