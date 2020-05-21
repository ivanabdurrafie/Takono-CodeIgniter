<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class TanyaJawab extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index()
    {
        $data['title'] = "Tanya Jawab | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Ayo bertanya dan bantu jawab pertanyaan ini";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / ";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-guest');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-jawab/index');
        $this->load->view('template/footer');
    }

    public function tambahPertanyaan()
    {
        $data['title'] = "Buat Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Ada yang bingung? yuk buat pertanyaan";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / Buat Pertanyaan";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-guest');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-jawab/tambah');
        $this->load->view('template/footer');
    }

    public function detailPertanyaan()
    {
        $data['title'] = "Lihat Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Yuk bantu jawab pertanyaan ini";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / Lihat Pertanyaan";
        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-guest');
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-jawab/detail');
        $this->load->view('template/footer');
    }

}

/* End of file TanyaJawab.php */

?>