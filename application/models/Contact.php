<?php

class Contact extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function send($data)
    {
        $this->db->insert('contact', $data);
        
        return $this->db->insert_id();
    }
}
