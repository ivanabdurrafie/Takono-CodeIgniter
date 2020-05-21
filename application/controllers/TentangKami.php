<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TentangKami extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $data['title'] = "Tentang Kami | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tentang Kami";
        $data['keteranganHalaman'] = "Informasi Tentang <b>Takono.</b>";
        $data['iconHalaman'] = "ik-info";
        $data['breadcrumbs'] = "Tentang Kami / ";
        $this->load->view('template/header', $data);
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('template/wrapper-admin');
        } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
            $this->load->view('template/wrapper-user');
        } else {
            $this->load->view('template/wrapper-guest');
        }
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tentang-kami/index');
        $this->load->view('template/footer');
    }
}


/* End of file TentangKami.php */
