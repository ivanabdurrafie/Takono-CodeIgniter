<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    var $API = "";

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
        $data['title'] = "Kelas | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Kelas";
        $data['keteranganHalaman'] = "Daftar kelas siswa";
        $data['iconHalaman'] = "ik-grid";
        $data['breadcrumbs'] = "Kelas / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/kelas'));
        $data['kelas'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('kelas/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Kelas | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data Kelas";
        $data['keteranganHalaman'] = "Halaman tambah data kelas siswa";
        $data['iconHalaman'] = "ik-grid";
        $data['breadcrumbs'] = "Kelas / Tambah Data Kelas";

        $this->form_validation->set_rules(
            'kelas',
            'Nama Kelas',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('kelas/tambah');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_kelas' => $this->input->NULL,
                'kelas' => $this->input->post('kelas'),
            );

            $insert = $this->curl->simple_post($this->API . '/kelas/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('berhasil', 'ditambahkan!');
            } else {
                $this->session->set_flashdata('gagal', 'ditambahkan!');
            }
            redirect('kelas');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Ubah Data Kelas | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data Kelas";
        $data['keteranganHalaman'] = "Halaman ubah data kelas siswa";
        $data['iconHalaman'] = "ik-grid";
        $data['breadcrumbs'] = "Kelas / Ubah Data Kelas";

        $respon = json_decode($this->curl->simple_get($this->API . '/kelas/' . $id));
        $data['kelas'] = $respon->value;

        $this->form_validation->set_rules(
            'kelas',
            'Nama Kelas',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('kelas/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_kelas' => $this->input->post('id_kelas'),
                'kelas' => $this->input->post('kelas'),
            );

            $update = $this->curl->simple_put($this->API . '/kelas/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('berhasil', 'diupdate!');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate!');
            }
            redirect('kelas');
        }
    }

    public function hapus($id)
    {
        $delete = $this->curl->simple_delete($this->API.'/kelas/delete/'. $id, array(CURLOPT_BUFFERSIZE => 10));
        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        redirect('kelas');
    }
}

/* End of file Kelas.php */
