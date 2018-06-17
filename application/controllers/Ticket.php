<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket extends MY_Controller {

	public function index()
	{
		$this->load->view('home');
	}
    public function view()
    {
        $this->load->view('tickets/view');
    }
    public function list()
    {
        $this->load->view('tickets/list');
    }
}
