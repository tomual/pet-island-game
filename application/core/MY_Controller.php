<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->user = null;
        if($this->session->userdata('id')) {
            $this->user = $this->session->userdata('user');
        }
        $this->metadata = new class{};
        $this->metadata->topics = $this->get_topics();
    }

    function get_topics()
    {
        $topics = array(
            'general' => 'MapleStory General',
            'market' => 'MapleStory Market',
            'games' => 'Video Games',
            'irl' => 'IRL',
            'screenshot' => 'Screenshot'
        );
        return $topics;
    }
}

class Authenticated_Controller extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id')) {
        	$this->session->set_flashdata('error', 'Please log in.');
            redirect('user/login');
        }
    }
}
