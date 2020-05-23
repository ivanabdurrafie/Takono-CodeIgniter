<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Jawaban extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin") {
            redirect('dashboard', 'refresh');
        }
    }


    public function index()
    {
        $data['title'] = "Jawaban | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Jawaban";
        $data['keteranganHalaman'] = "Daftar jawaban yang sudah dikirim di <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Jawaban / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('jawaban/index');
        $this->load->view('template/footer');
    }
}

/* End of file Jawaban.php */
