<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
    {
        $data['title'] = "Dashboard | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Dashboard";
        $data['keteranganHalaman'] = "Halaman utama <b>Takono.</b>";
        $data['iconHalaman'] = "ik-home";
        $data['breadcrumbs'] = "Dashboard / ";
        $this->load->view('template/header', $data);

        if ($this->session->userdata('level') == "admin") {
            $this->load->view('template/wrapper-admin');
        }elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
            $this->load->view('template/wrapper-user');
        }else {
            $this->load->view('template/wrapper-guest');
        }

        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('dashboard/index-user');
        $this->load->view('template/footer');
    }

}

/* End of file Dashboard_user.php */
