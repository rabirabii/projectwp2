<?php

class Autentifikasi extends CI_Controller
{
    public function index()
    {
        //jika statusnya sudah login, maka tidak bisa mengakses
        //halaman login alias dikembalikan ke tampilan user
        if ($this->session->userdata('email')) {
            redirect('user');
        }


        // Set method Validation untuk form
        $this->form_validation->set_rules(
            'email',
            'Alamat Email',
            'required|trim|valid_email',
            [
                'required' => 'Email Harus diisi!!',
                'valid_email' => 'Email Tidak Benar!!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password Harus diisi'
            ]
        );

        // eksekusi form validasi
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Login';
            $data['user'] = '';

            //kata 'login' merupakan nilai dari variabel judul dalam
            //array $data dikirimkan ke view aute_header
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/login');
            $this->load->view('templates/aute_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = htmlspecialchars($this->input->post('email', true));
        $password = $this->input->post('password', true);
        $user = $this->ModelUser->cekData(['email' => $email])->row_array();

        //jika usernya ada (exist)
        if ($user) {
            //jika user sudah aktif
            if ($user['is_active'] == 1) {

                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1)
                        redirect('admin');
                    else {
                        if ($user['image'] == 'default.jpg') {
                            $this->session->set_flashdata(
                                'pesan',
                                '<div class="alert alert-info alert-message" role="alert">Silahkan Ubah Profile Anda untuk Ubah Photo Profil</div>'
                            );
                        }

                        redirect('member');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Password salah!!</div>');
                    redirect('autentifikasi');
                }
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">User belum diaktifasi!!</div>');
                redirect('autentifikasi');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert">Email tidak terdaftar!!</div>');
            redirect('autentifikasi');
        }
    }

    public function blok()
    {
        $this->load->view('autentifikasi/blok');
        $this->output->set_Status_header('404');
    }
    public function gagal()
    {
        $this->load->view('autentifikasi/gagal');
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('username', 'Enter Your Username', 'required', [
            'required' => 'Username Belum Diisi!!'
        ]);

        $this->form_validation->set_rules(
            'email',
            'Enter Your Email',
            'required|trim|valid_email|is_unique[user.email]',
            [
                'valid_email' => 'Email Tidak Benar',
                'required' => 'Email Belum Diisi!!',
                'is_unique' => 'Email sudah Terdaftar'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Enter Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak sama ! !',
                'required' => 'Password harus Diisi! !',
                'min_length' => 'Password terlalu pendek ! !'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Repeat your password',
            'required|trim|min_length[5]|matches[password1]',
            [
                'matches' => 'Password Tidak sama ! !',
                'required' => 'Password harus Diisi! !',
                'min_length' => 'Password terlalu pendek ! !'
            ]
        );

        if ($this->form_validation->run() === FALSE) {
            $data['judul'] = 'Registration Form';
            $this->load->view('templates/aute_header', $data);
            $this->load->view('autentifikasi/register');
            $this->load->view('templates/aute_footer');
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'role_id' => 2,
                'username' => htmlspecialchars($this->input->post('username', true)),
                'email' => htmlspecialchars($email),
                'Nama' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'is_active' => 1,
                'image' => 'dead.jpg',
                'vip' => 0
            ];
            $this->ModelUser->simpanData($data);

            $this->session->set_flashdata('pesan', '<div class = "audun_success" role = "alert">Selamat! Registrasi Berhasil</div>');
            redirect('autentifikasi');
        }
    }
    public function logout()
    {
        $item = array('email', 'role_id');
        $this->session->unset_userdata($item);
        redirect('Home');
    }
}