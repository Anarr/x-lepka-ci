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
    public function getProductsByCategoryId($categoryId)
    {
        $query = $this->db->get_Where('products', array('category_id'=> $categoryId));
        return $query->result();
    }

    public function add($data=array())
    {
        return $this->db->insert('categories', $data);
    }
}
