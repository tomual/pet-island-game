<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thread extends MY_Controller {

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

	public function view($id, $title = null)
	{
		$thread = $this->thread_model->get($id);
        if (empty($thread)) {
            show_error("Thread not found", 404);
        }
        $replies = $this->reply_model->get_by_thread($id);
		$this->load->view('thread/view', compact('thread', 'replies'));
	}

    public function topic($topic)
    {
        $threads = $this->reply_model->get_by_topic($topic);
        $this->load->view('thread/topic', compact('topic', 'threads'));
    }

	public function new()
	{
        if ($this->input->method() == 'post') {
        	$this->form_validation->set_rules('topic', 'Topic', 'required');
        	$this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[45]');
        	$this->form_validation->set_rules('message', 'Message', 'required|min_length[4]|max_length[2000]');

        	if ($this->form_validation->run() !== FALSE)
        	{
        		$topic = $this->input->post('topic');
        		$title = $this->input->post('title');
        		$message = $this->input->post('message');

        		$id = $this->thread_model->create($topic, $title, $message);
        		if ($id) {
        			redirect("thread/view/$id");
        		}
        		$this->session->set_flashdata('error', 'Failed to create thread.');
        	}
        }
		$this->load->view('thread/new');
	}
}
