<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lagu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    // Region Kategori
    public function genre()
    {
        $data['judul'] = 'Genre Lagu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['genre'] = $this->ModelLagu->getGenre()->result_array();
        $this->form_validation->set_rules(
            'genre',
            'Genre',
            'required',
            [
                'required' => 'Genre harus diisi'
            ]
        );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/genre', $data);
            $this->load->view('templates/footer');
        } else {
            $data = ['genre' => $this->input->post('genre')];
            $this->ModelLagu->simpanGenre($data);
            redirect('lagu/genre');
        }
    }

    public function ubahGenre()
    {
        $data['judul'] = 'Ubah Kategori lagu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

        $where = ['id_genre' =>  $this->uri->segment(3)];
        $data['genre'] = $this->ModelLagu->genreWhere($where)->row_array();


        $this->form_validation->set_rules(
            'genre',
            'Genre',
            'required',
            [
                'required' => 'Judul lagu harus diisi'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/ubahGenre', $data);
            $this->load->view('templates/footer');
        } else {
            $data = ['genre' => $this->input->post('genre')];
            $this->ModelLagu->updateGenre(['id_genre' => $this->input->post('id_genre')], $data);
            redirect('lagu/genre');
        }
    }

    public function hapusGenre()
    {
        $where = ['id_genre' => $this->uri->segment(3)];
        $this->ModelLagu->hapusGenre($where);
        redirect('lagu/genre');
    }
    public function index()
    {
        $data['judul'] = 'Data Lagu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['lagu'] = $this->ModelLagu->getLagu()->result_array();
        $data['musisi'] = $this->ModelLagu->getMusisi()->result_array();
        $data['genre'] = $this->ModelLagu->getGenre()->result_array();
        $data['album'] = $this->ModelLagu->getAlbum()->result_array();

        $this->form_validation->set_rules(
            'nama_lagu',
            'Nama lagu',
            'required|min_length[3]',
            [
                'required' => 'Judul lagu harus diisi',
                'min_length' => 'Judul lagu terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'musisi',
            'Nama Musisi',
            'required|min_length[3]',
            [
                'required' => 'harus diisi',
                'min_length' => ' terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'album',
            'Judul lagu',
            'required|min_length[3]',
            [
                'required' => ' harus diisi',
                'min_length' => 'terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'id_genre',
            'Genre',
            'required',
            [
                'required' => 'Genre harus diisi',
            ]
        );

        $this->form_validation->set_rules(
            'durasi',
            'Durasi',
            'required|min_length[3]',
            [
                'required' => ' harus diisi',
                'min_length' => 'terlalu pendek'
            ]
        );

        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/lagu/';
        $config['allowed_types'] = 'mp3|mp3g|mpeg3|mpeg|mp4|wav';
        $config['max_size'] = '30000';
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('path')) {
                $musik = $this->upload->data();
                $path = $musik['file_name'];
            } else {
                $path = '';
            }


            $data = [
                'nama_lagu' => $this->input->post('nama_lagu', true),
                'musisi' => $this->input->post('musisi', true),
                'album' => $this->input->post('album', true),
                'id_genre' => $this->input->post('id_genre', true),
                'durasi' => $this->input->post('durasi', true),
                'path' => $path
            ];
            $this->ModelLagu->simpanlagu($data);
            redirect('lagu');
        }
    }
    public function deleteLagu()
    {
        $where = ['id_lagu' => $this->uri->segment(3)];
        $this->ModelLagu->deleteLagu($where);
        redirect('lagu');
    }


    public function album()
    {
        $data['judul'] = 'Data Album';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['album'] = $this->ModelLagu->getAlbum()->result_array();
        $data['musisi'] = $this->ModelLagu->getMusisi()->result_array();

        $this->form_validation->set_rules(
            'nama_album',
            'Judul Album',
            'required|min_length[3]',
            [
                'required' => 'Judul album harus diisi',
                'min_length' => 'Judul album terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'musisi',
            'Nama Musisi',
            'required|min_length[3]',
            [
                'required' => 'Judul musisi harus diisi',
                'min_length' => 'Judul musisi terlalu pendek'
            ]
        );
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/artwork/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/album', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'nama_album' => $this->input->post('nama_album', true),
                'musisi' => $this->input->post('musisi', true),
                'artworkpath' => $gambar
            ];
            $this->ModelLagu->simpanAlbum($data);
            redirect('lagu/album');
        }
    }
    public function hapusAlbum()
    {
        $where = ['id_album' => $this->uri->segment(3)];
        $this->ModelLagu->hapusAlbum($where);
        redirect('lagu/album');
    }
    public function ubahAlbum()
    {
        $data['judul'] = 'Ubah Data Album';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['album'] = $this->ModelLagu->albumWhere(['id_album' => $this->uri->segment(3)])->row_array();
        $album = $this->ModelLagu->joinAlbumMusisi(['album.id_album' => $this->uri->segment(3)])->result_array();

        foreach ($album as $a) {
            $data['id_album'] = $a['id_musisi'];
            $data['a'] = $a['musisi'];
        }

        $data['musisi'] = $this->ModelLagu->getMusisi()->result_array();


        $this->form_validation->set_rules(
            'album',
            'Album',
            'required|min_length[3]',
            [
                'required' => 'Album harus diisi',
                'min_length' => 'Album terlalu pendek'
            ]
        );
        $this->form_validation->set_rules(
            'musisi',
            'musisi',
            'required',
            [
                'required' => 'Nama musisi harus diisi',
            ]
        );
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/artwork/';
        $config['allowed_types'] = 'png|jpg|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '3000';
        $config['max_height'] = '3000';
        $config['file_name'] = 'img' . time();
        $this->load->library('upload', $config);
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('lagu/ubahalbum', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/artwork/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            // data postingan
            $data = [
                'nama_album' => $this->input->post('nama_album', true),
                'musisi' => $this->input->post('musisi', true),
                'artworkpath' => $gambar
            ];
            $this->ModelLagu->updateAlbum($data, ['id_album' => $this->input->post('id_album')]);
            redirect('lagu');
        }
    }
}