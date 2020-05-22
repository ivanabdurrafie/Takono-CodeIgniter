<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "User";
        $data['keteranganHalaman'] = "Daftar user yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['title'] = "Detail Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data User";
        $data['keteranganHalaman'] = "Halaman detail data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Detail Data User";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/detail');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data User";
        $data['keteranganHalaman'] = "Halaman tambah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Tambah Data User";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/tambah');
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $data['title'] = "Ubah Data User | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data User";
        $data['keteranganHalaman'] = "Halaman ubah data user";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "User / Ubah Data User";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('user/edit');
        $this->load->view('template/footer');
    }

}

/* End of file User.php */
