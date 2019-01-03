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

    public function getCategoryById($categoryId)
    {
        $query = $this->db->get_Where('categories', array('id'=> $categoryId));
        return $query->result_array();
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

    public function change($data=array(), $categoryId)
    {
        $this->db->set('name', $data['name']);
        $this->db->where('id', $categoryId);
        return $this->db->update('categories');
    }

    public function remove($categoryId)
    {
        $this->db->where('id', $categoryId);
        $this->db->delete(array('categories'));
    }
}
