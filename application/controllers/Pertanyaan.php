<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pertanyaan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin"){
            redirect('dashboard','refresh');
        }

        $this->API = "http://localhost:8080/Takono-laravel/api";
    }
    

    public function index()
    {
        $data['title'] = "Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Pertanyaan";
        $data['keteranganHalaman'] = "Daftar pertanyaan yang ditanyakan <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Pertanyaan / ";
        
        $respon = json_decode($this->curl->simple_get($this->API . '/pertanyaan/'));
        $data['pertanyaan'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('pertanyaan/index',$data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Pertanyaan";
        $data['keteranganHalaman'] = "Detail Pertanyaan yang ditanyakan";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Pertanyaan / Detail Pertanyaan";
        
        $respon = json_decode($this->curl->simple_get($this->API . '/pertanyaan/' . $id));
        $data['pertanyaan'] = $respon->value;

        $respon = json_decode($this->curl->simple_get($this->API . '/komentar/' . $id));
        $data['komentar'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('pertanyaan/detail',$data);
        $this->load->view('template/footer');
    }

    public function hapusKomentar()
    {
        $id = $this->input->post('id_komentar');
        $id_pertanyaan = $this->input->post('id_pertanyaan');
         
        $delete = $this->curl->simple_delete($this->API . '/komentar/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        
        redirect('pertanyaan/detail/'.$id_pertanyaan);
    }

    public function hapusPertanyaan($id)
    { 
        $delete = $this->curl->simple_delete($this->API . '/pertanyaan/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        
        redirect('pertanyaan');
    }

}

/* End of file Pertanyaan.php */
