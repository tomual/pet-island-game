<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends Authenticated_Controller {

	public function index()
	{
		$this->load->view('page');
	}
}
