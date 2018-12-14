<?php

class Category extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getCategories()
    {
        $query = $this->db->get('categories');
        return $query->result();
    }

}
