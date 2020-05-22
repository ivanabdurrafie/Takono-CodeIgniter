<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Siswa";
        $data['keteranganHalaman'] = "Daftar siswa yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/index');
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['title'] = "Detail Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data Siswa";
        $data['keteranganHalaman'] = "Halaman detail data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Detail Data Siswa";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/detail');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data Siswa";
        $data['keteranganHalaman'] = "Halaman tambah data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Tambah Data Siswa";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/tambah');
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $data['title'] = "Ubah Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data Siswa";
        $data['keteranganHalaman'] = "Halaman ubah data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Ubah Data Siswa";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/edit');
        $this->load->view('template/footer');
    }

}

/* End of file Siswa.php */
