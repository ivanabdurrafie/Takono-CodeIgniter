<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanya extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }


    public function index()
    {
        $data['title'] = "Tanya | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanyakan";
        $data['keteranganHalaman'] = "Ayo bertanya di <b>Takono.</b>";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Sesuatu / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-guest');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-guest/index');
        $this->load->view('template/footer');
    }
}

/* End of file Tanya_guest.php */
