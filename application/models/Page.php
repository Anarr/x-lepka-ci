<?php

class Page extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getPageBySlug($slug = '')
    {
        $query = $this->db->get_where('pages', array('slug' => $slug));
        
        return $query->result();
    }

    public function change($data=array(), $slug)
    {
        $this->db->set('title', $data['title']);
        $this->db->set('description', $data['description']);
        $this->db->where('slug', $slug);
        return $this->db->update('pages');
    }
}
