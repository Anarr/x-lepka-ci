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
}
