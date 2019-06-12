<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reply extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('thread_model');
        $this->load->model('reply_model');
        $this->load->model('posts_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        set_title('Welcome');
		$this->load->view('home');
	}

	public function new($thread_id)
	{
        if ($this->input->method() == 'post') {
        	$this->form_validation->set_rules('message', 'Message', 'required|min_length[4]|max_length[2000]');

        	if ($this->form_validation->run() !== FALSE)
        	{
        		$message = $this->input->post('message');

        		$thread = $this->thread_model->get($thread_id);
        		if (empty($thread)) {
            		show_error("Thread not found", 404);
        		}

        		$id = $this->reply_model->create($thread_id, $message);
        		if (!$id) {
        			$this->session->set_flashdata('error', 'Failed to reply.');
        			return;
        		}

        		redirect("thread/view/$thread_id#reply");
        	}
        }
        $thread = $this->thread_model->get($thread_id);
        if (empty($thread)) {
        	$this->session->set_flashdata('error', 'Thread does not exist.');
        	return;
        }
		$this->load->view('reply/new', compact('thread'));
	}
}
