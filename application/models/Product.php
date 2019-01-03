<?php

class Product extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts($filter = array(), $offset = 0, $limit = 10)
    {
        $query = $this->db->get_where('products', $filter, $offset, $limit);
        return $query->result();
    }

    public function getProductById($id = 0)
    {
        $query = $this->db->get_where('products', array('id' => $id));
        
        return $query->result();
    }

    public function remove($productId)
    {
        $this->db->where('id', $productId);
        $this->db->delete(array('products'));
    }
}
