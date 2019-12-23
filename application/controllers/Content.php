<?php
class Content extends CI_Controller{

    public function apparel(){
        $this->load->view('content/apparel');
    }

    public function accessories(){
        $this->load->view('content/accessories');
    }

    public function bag(){
        $this->load->view('content/bag');
    }

    public function gallery(){
        $this->load->view('content/gallery');
    }

    public function about(){
        $this->load->view('content/about');
    }

    public function index(){
        $this->load->view('content/index');
    }
}