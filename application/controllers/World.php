<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class World extends Authenticated_Controller {

	public function index()
	{
		$this->load->view('world/world');
	}
}
