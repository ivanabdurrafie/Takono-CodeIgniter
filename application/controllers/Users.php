<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin") {
            redirect('dashboard', 'refresh');
        }
        $this->API = "http://localhost:8000/api";
        $this->load->model('user_model');
    }


    public function index()
    {
        $data['title'] = "User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "User";
        $data['keteranganHalaman'] = "Daftar user yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / ";

        $data['user'] = $this->user_model->getAllUser();

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data User";
        $data['keteranganHalaman'] = "Halaman detail data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Detail Data User";

        $data['user'] = $this->user_model->getUserByID($id);

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa'));
        $data['siswa'] = $respon->value;

        $respon = json_decode($this->curl->simple_get($this->API . '/guru'));
        $data['guru'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/detail');
        $this->load->view('template/footer');
    }

    public function jenisAkun()
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Jenis Akun User";
        $data['keteranganHalaman'] = "Pilih jenis akun yang akan ditambahkan";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/jenis-akun');
        $this->load->view('template/footer');
    }

    public function pilihSiswa()
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Jenis Akun User";
        $data['keteranganHalaman'] = "Pilih siswa yang akan dibuatkan akunnya";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa'));
        $data['siswa'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/pilih-siswa', $data);
        $this->load->view('template/footer');
    }

    public function pilihGuru()
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Jenis Akun User";
        $data['keteranganHalaman'] = "Pilih guru yang akan dibuatkan akunnya";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";

        $respon = json_decode($this->curl->simple_get($this->API . '/guru'));
        $data['guru'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/pilih-guru', $data);
        $this->load->view('template/footer');
    }

    public function tambahAkunAdmin()
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data User";
        $data['keteranganHalaman'] = "Halaman tambah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[user.username]',
            array(
                'required' => '%s masih kosong loh!',
                'is_unique' => '%s sudah terdaftar loh!'
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('user/tambah-akun-admin', $data);
            $this->load->view('template/footer');
        } else {
            $this->user_model->tambahUser();
            $this->session->set_flashdata('berhasil', 'ditambahkan');
            redirect('users', 'refresh');
        }
    }

    public function tambahAkunSiswa($id)
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data User";
        $data['keteranganHalaman'] = "Halaman tambah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa/' . $id));
        $data['siswa'] = $respon->value;

        $this->form_validation->set_rules(
            'id_siswa',
            'Akun Siswa',
            'is_unique[user.id_siswa]',
            array(
                'is_unique' => '%s ini sudah terdaftar loh!'
            )
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[user.username]',
            array(
                'required' => '%s masih kosong loh!',
                'is_unique' => '%s sudah terdaftar loh!'
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s masih kosong loh!',
                'valid_email' => '%s format emailnya salah loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('user/tambah-akun-siswa', $data);
            $this->load->view('template/footer');
        } else {
            $this->user_model->tambahUser();
            $this->session->set_flashdata('berhasil', 'ditambahkan');
            redirect('users', 'refresh');
        }
    }

    public function tambahAkunGuru($id)
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data User";
        $data['keteranganHalaman'] = "Halaman tambah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";

        $respon = json_decode($this->curl->simple_get($this->API . '/guru/' . $id));
        $data['guru'] = $respon->value;

        $this->form_validation->set_rules(
            'id_guru',
            'Akun Guru',
            'is_unique[user.id_guru]',
            array(
                'is_unique' => '%s ini sudah terdaftar loh!'
            )
        );

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|is_unique[user.username]',
            array(
                'required' => '%s masih kosong loh!',
                'is_unique' => '%s sudah terdaftar loh!'
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s masih kosong loh!',
                'valid_email' => '%s format emailnya salah loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('user/tambah-akun-guru', $data);
            $this->load->view('template/footer');
        } else {
            $this->user_model->tambahUser();
            $this->session->set_flashdata('berhasil', 'ditambahkan');
            redirect('users', 'refresh');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Ubah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data User";
        $data['keteranganHalaman'] = "Halaman ubah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Ubah Data User";

        $data['user'] = $this->user_model->getUserByID($id);
        $data['level'] = ['admin','siswa','guru'];

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'level',
            'Level',
            'required',
            array(
                'required' => 'Heii, kamu masih belum pilih %s usernya loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('user/edit',$data);
            $this->load->view('template/footer');
        } else {
            $this->user_model->ubahUser();
            $this->session->set_flashdata('berhasil', 'diupdate');
            redirect('users', 'refresh');
        }
    }

    public function hapus($id)
    {
        $this->user_model->hapusUser($id);
        $this->session->set_flashdata('berhasil', 'dihapus');
        redirect('users', 'refresh');
    }
}

/* End of file User.php */
