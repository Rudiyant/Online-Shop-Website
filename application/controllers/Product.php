<?php
class Product extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('ProductModel');
    }

    public function detail_product($id_product){
        $data['product'] = $this->ProductModel->findById($id_product);

        $this->load->view('order/order', $data);
    }
}
?>