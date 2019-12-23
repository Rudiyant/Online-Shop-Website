<?php
class OrderModel extends CI_Model
{
    const TABLE_NAME = 'data_order';

    public function create($order)
    {
        return $this->db->insert($this::TABLE_NAME, $order);
    }

    public function read()
    {
        $this->db->select('*');
        $this->db->from($this::TABLE_NAME);
        return $this->db->get()->result_array();
    }

    public function delete($id_order)
    {
        $query = $this->db->where('id_order', $id_order)->delete($this::TABLE_NAME);
        return $query;
    }

    public function findById($id_order){
        $query = $this->db->from($this::TABLE_NAME)
                          ->where('data_order.id_order', $id_order)
                          ->get()
                          ->row_array();

        return $query;
    }

    public function update($data_order)
    {
        $query = $this->db->where('id_order', $data_order['id_order'])
                          ->update($this::TABLE_NAME, $data_order);
        return $query;
    }

    public function laporanPenjualan($data_penjualan)
    {
        return $this->db->insert('laporan_penjualan', $data_penjualan);
    }

    public function tampil_laporan_penjualan($id_user)
    {
        $query = $this->db->from('laporan_penjualan')
                          ->where('laporan_penjualan.id_user', $id_user)
                          ->get()
                          ->result_array();

        return $query;

    }
}

