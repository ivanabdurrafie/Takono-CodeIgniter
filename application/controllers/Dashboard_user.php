<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {
    
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
        $data['breadcrumbs'] = "";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-guest');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('dashboard/index');
        $this->load->view('template/footer');
    }

}

/* End of file Dashboard_user.php */

?>