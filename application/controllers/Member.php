<?php

class Member extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'judul' => 'Welcome!',
            'album' => $this->ModelLagu->getLimitAlbum()->result(),
            'lagu' => $this->ModelLagu->getLimitLagu()->result(),
            'musisi' => $this->ModelLagu->getLimitMusisi()->result(),
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('member/header', $data);
        $this->load->view('member/menu', $data);
        $this->load->view('member/footer');
    }

    public function vip()
    {
        $data = [
            'judul' => 'Welcome!',
            'vip' => $this->ModelVIP->get_vip_info()
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('member/header', $data);
        $this->load->view('member/vip', $data);
        $this->load->view('member/footer');
    }

    public function checkout()
    {

        $data = [
            'vip' => $this->ModelVIP->get_vip_info()
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Check";
        $this->load->view('member/header', $data);
        $this->load->view('member/checkout', $data);
        $this->load->view('member/footer');
    }
    public function checkout1()
    {


        $data = [
            'vip' => $this->ModelVIP->get_vip_info()
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Check";
        $this->load->view('member/header', $data);
        $this->load->view('member/checkout1', $data);
        $this->load->view('member/footer');
    }
    public function checkout2()
    {


        $data = [
            'vip' => $this->ModelVIP->get_vip_info()
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Check";
        $this->load->view('member/header', $data);
        $this->load->view('member/checkout2', $data);
        $this->load->view('member/footer');
    }

    public function thankyou()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = "Thank You";
        $this->load->view('member/header', $data);
        $this->load->view('member/thankyou');
        $this->load->view('member/footer');
    }

    public function laporan_pdf()
    {
        $this->load->library('Dompdf_gen');
        $data = ['vip' => $this->ModelVIP->get_vip_info()];

        $this->load->view('member/laporan_pdf', $data);
        $paper = 'A4';
        $orien = 'landscape';
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper, $orien);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf");
    }

    public function album()
    {
        $data = [
            'judul' => 'Album',
            'album' => $this->ModelLagu->getAlbum()->result(),
        ];
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('member/header', $data);
        $this->load->view('member/album', $data);
        $this->load->view('member/footer');
    }
    public function myProfil()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules(
            'nama',
            'Nama Lengkap',
            'required|trim',
            [
                'required' => 'Nama tidak Boleh Kosong'
            ]
        );

        //Form validasi
        if ($this->form_validation->run() == false) {
            $this->load->view('member/header', $data);
            $this->load->view('member/changeprofile', $data);
            $this->load->view('member/footer');
        } else {
            $nama = $this->input->post('nama', true);
            $email = $this->input->post('email', true);

            //jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            //Cek kalau image exist
            if ($upload_image) {
                //Eksekusi script
                $config['upload_path'] = './assets/img/profile/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '3000';
                $config['max_width'] = '3000';
                $config['max_height'] = '3000';
                $config['file_name'] = 'pro' . time();
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $gambar_lama = $data['user']['image'];

                    if ($gambar_lama != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                    }

                    $gambar_baru = $this->upload->data('file_name');
                    $this->db->set('image', $gambar_baru);
                } else {
                }
            }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('member/myprofil');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Anda telah logout!!</div>');
        redirect('home');
    }
}