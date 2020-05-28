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

        $this->API = "http://localhost:8000/api";
    }


    public function index()
    {
        $data['title'] = "Jawaban | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Jawaban";
        $data['keteranganHalaman'] = "Daftar jawaban yang sudah dikirim di <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Jawaban / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/komentar'));
        $data['komentar'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('jawaban/index',$data);
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

    public function hapusKomentar($id)
    { 
        $delete = $this->curl->simple_delete($this->API . '/komentar/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        
        redirect('jawaban');
    }
}

/* End of file Jawaban.php */
