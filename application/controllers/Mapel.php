<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Mata Pelajaran";
        $data['keteranganHalaman'] = "Daftar mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('mapel/index');
        $this->load->view('template/footer');
    }

    public function detail()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Mata Pelajaran";
        $data['keteranganHalaman'] = "Halaman detail mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / Detail Mata Pelajaran";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('mapel/detail');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Mata Pelajaran";
        $data['keteranganHalaman'] = "Halaman tambah mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / Tambah Mata Pelajaran";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('mapel/tambah');
        $this->load->view('template/footer');
    }

    public function edit()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Mata Pelajaran";
        $data['keteranganHalaman'] = "Halaman ubah mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / Ubah Mata Pelajaran";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('mapel/edit');
        $this->load->view('template/footer');
    }

}

/* End of file Mapel.php */
