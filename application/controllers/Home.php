<?php
defined('BASEPATH') or exit('no direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('ModelUser');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('home/v_header', $data);
        $this->load->view('home/v_index', $data);
        $this->load->view('home/v_footer', $data);
    }
}