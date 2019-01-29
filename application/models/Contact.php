<?php

class Contact extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMessages()
    {
        $query = $this->db->get('contact');
        return $query->result();
    }

    public function send($data)
    {
        $this->db->insert('contact', $data);
        
        return $this->db->insert_id();
    }

    public function removeMessage($messageId)
    {
        $this->db->where('id', $messageId);
        return $this->db->delete('contact');
    }
}
