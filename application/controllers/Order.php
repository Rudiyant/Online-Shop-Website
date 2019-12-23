<?php
class Order extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('OrderModel');
    }

    public function create()
    {
        $order = array(
            'id_user'         => $this->session->userdata('id_user'),
            'nama_product'    => $this->input->post('nama_product'),
            'harga'           => $this->input->post('harga'),
            'ukuran'          => $this->input->post('ukuran'),
            'warna'           => $this->input->post('warna'),
            'nama_pembeli'    => $this->input->post('nama'),
            'no_hp_pembeli'   => $this->input->post('no_hp'),
            'alamat_pembeli'  => $this->input->post('alamat'),
            'metode_bayar'    => $this->input->post('bayar'),
            'metode_kirim'    => $this->input->post('kirim'),
        );

        $this->OrderModel->create($order);
        redirect('order/tampil_order');
    }

    public function tampil_order(){
        $data['order'] = $this->OrderModel->read();

        $this->load->view('order/keranjang', $data);
    }

    public function delete($id_order){
        $this->OrderModel->delete($id_order);
        $this->session->set_flashdata('cancelOrder', '<div style="color:green">Pembelian berhasil dibatalkan.</div>');

        redirect('order/tampil_order');
    }

    public function tampil_data_order($id_order)
    {
        $data['order'] = $this->OrderModel->findById($id_order);

        $this->load->view('order/edit_order', $data);
    }

    public function update($id_order)
    {
        $data_order = array(
            'id_order'        => $id_order,
            'id_user'         => $this->session->userdata('id_user'),
            'nama_product'    => $this->input->post('nama_product'),
            'harga'           => $this->input->post('harga'),
            'ukuran'          => $this->input->post('ukuran'),
            'warna'           => $this->input->post('warna'),
            'nama_pembeli'    => $this->input->post('nama'),
            'no_hp_pembeli'   => $this->input->post('no_hp'),
            'alamat_pembeli'  => $this->input->post('alamat'),
            'metode_bayar'    => $this->input->post('bayar'),
            'metode_kirim'    => $this->input->post('kirim'),
        );
        $this->OrderModel->update($data_order);
        $this->session->set_flashdata('editOrder', '<div style="color:green">Data Order Berhasil Diubah!</div>');
        redirect('order/tampil_order');
    }

    public function check_out($id_order)
    {
        $data['invoice'] = $this->OrderModel->findById($id_order);

        $this->load->view('order/invoice', $data);

        $data_penjualan = array(
            'id_order'        => $id_order,
            'id_user'         => $data['invoice']['id_user'],
            'nama_pembeli'    => $data['invoice']['nama_pembeli'],
            'no_hp_pembeli'   => $data['invoice']['no_hp_pembeli'],
            'alamat_pembeli'  => $data['invoice']['alamat_pembeli'],
            'nama_product'    => $data['invoice']['nama_product'],
            'harga'           => $data['invoice']['harga'],
            'ukuran'          => $data['invoice']['ukuran'],
            'warna'           => $data['invoice']['warna'],
            'metode_bayar'    => $data['invoice']['metode_bayar'],
            'metode_kirim'    => $data['invoice']['metode_kirim'],
        );

        $this->OrderModel->laporanPenjualan($data_penjualan);
        $this->OrderModel->delete($id_order);
    }

    public function tampil_laporan($id_user){
        $data['order'] = $this->OrderModel->tampil_laporan_penjualan($id_user);

        $this->load->view('order/riwayat_pembelian', $data);
    }
}
