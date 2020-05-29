<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost:8080/Takono-laravel/api";       
    }

    public function index()
    {
        $data['title'] = "Dashboard | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Dashboard";
        $data['keteranganHalaman'] = "Halaman utama <b>Takono.</b>";
        $data['iconHalaman'] = "ik-home";
        $data['breadcrumbs'] = "Dashboard / ";
        $data['nama'] = $this->session->userdata('username');
        
        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->load->view('template/header', $data);

        if ($this->session->userdata('level') == "admin") {
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
        } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
            $this->load->view('template/wrapper-user',$data);
            $this->load->view('template/sidebar-user');
        } else {
            $this->load->view('template/wrapper-guest');
            $this->load->view('template/sidebar-user');
        }

        $this->load->view('template/breadcrumbs');

        if ($this->session->userdata('level') == "admin") {
            $this->load->view('dashboard/index-admin',$data);
        } else {
            $this->load->view('dashboard/index-user',$data);
        }

        $this->load->view('template/footer');
    }
}

/* End of file Dashboard_user.php */
