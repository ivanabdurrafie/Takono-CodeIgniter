<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('dashboard','refresh');
        }
    }
    

    public function index()
    {
        $data['title'] = "Profil | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Profil";
        $data['keteranganHalaman'] = "Hai, ini profil pribadimu";
        $data['iconHalaman'] = "ik-user";
        $data['breadcrumbs'] = "Profil / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-user');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('profil/index');
        $this->load->view('template/footer');
    }

    public function pengaturan()
    {
        $data['title'] = "Pengaturan Profil| Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Penganturan Profil";
        $data['keteranganHalaman'] = "Ada yang ingin diubah?";
        $data['iconHalaman'] = "ik-settings";
        $data['breadcrumbs'] = "Profil / Pengaturan Profil";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-user');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('profil/pengaturan');
        $this->load->view('template/footer');
    }
}
    
/* End of Profil.php */
