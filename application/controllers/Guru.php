<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Guru";
        $data['keteranganHalaman'] = "Daftar guru yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/index');
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['title'] = "Detail Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data Guru";
        $data['keteranganHalaman'] = "Halaman detail data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Detail Data Guru";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/detail');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data Guru";
        $data['keteranganHalaman'] = "Halaman tambah data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Tambah Data Guru";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/tambah');
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $data['title'] = "Ubah Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data Guru";
        $data['keteranganHalaman'] = "Halaman ubah data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Ubah Data Guru";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/edit');
        $this->load->view('template/footer');
    }

}

/* End of file Guru.php */
