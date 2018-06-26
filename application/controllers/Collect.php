<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collect extends MY_Controller {

	public function bean()
	{
		$collected = $this->collection_model->collect($this->user->id);
		if($collected) {
			$this->currency_model->add_beans($this->user->id, 12);
		}
		redirect();
	}
}
