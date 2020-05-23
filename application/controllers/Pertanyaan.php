<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Pertanyaan";
        $data['keteranganHalaman'] = "Daftar pertanyaan yang ditanyakan <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Pertanyaan / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('pertanyaan/index');
        $this->load->view('template/footer');
    }

}

/* End of file Pertanyaan.php */
