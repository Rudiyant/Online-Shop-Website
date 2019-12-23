<?php
class ProductModel extends CI_Model
{
    const TABLE_NAME = 'product';

    public function findById($id_product){
        $query = $this->db->from($this::TABLE_NAME)
                          ->where('product.id_product', $id_product)
                          ->get()
                          ->row_array();

        return $query;
    }

    public function read()
    {
        $this->db->select('*');
        $this->db->from($this::TABLE_NAME);
        return $this->db->get()->result_array();
    }
    
}