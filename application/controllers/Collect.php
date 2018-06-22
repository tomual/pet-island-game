<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collect extends MY_Controller {

	public function bean()
	{
		$this->collection_model->collect($this->user->id);
		redirect();
	}
}
