<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mailing_model extends CI_Model
{

    public function create($data)
    {
        $this->db->insert('mailing', $data);
        return $this->db->insert_id();
    }
}
