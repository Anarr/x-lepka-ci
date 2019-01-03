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

    public function getAllProducts($productId = 0)
    {
        $this->db->select('p.id, p.title, p.description, p.photo, p.price, p.category_id, p.show_home_page, c.name');
        $this->db->from('products as p');
        $this->db->join('categories as c', 'p.category_id = c.id');
        if ($productId > 0) {
            $this->db->where('p.id', $productId);
        }
        $query = $this->db->get();
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
