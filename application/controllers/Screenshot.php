<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Screenshot extends MY_Controller {

	public function _remap($screenshot_id, $params = array())
	{
        return call_user_func_array(array($this, 'view'), compact('screenshot_id'));
	}

	public function view($screenshot_id)
	{
		$this->load->view('screenshot/view');
	}
}
