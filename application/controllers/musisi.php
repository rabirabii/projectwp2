<?php

class Musisi extends CI_Controller
{

    public function index()
    {

        $data['judul'] = 'Data Musisi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['musisi'] = $this->ModelLagu->getMusisi()->result_array();
        $this->form_validation->set_rules('musisi', 'Musisi', 'required', [
            'required' => 'Nama Musisi harus diisi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/musisi', $data);
            $this->load->view('templates/footer');
        } else {
            $data = ['musisi' => $this->input->post('musisi')];
            $this->ModelLagu->simpanMusisi($data);
            redirect('musisi');
        }
    }

    public function ubahMusisi()
    {
    }
}