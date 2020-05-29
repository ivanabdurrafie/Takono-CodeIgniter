<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mapel extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') != "admin") {
            redirect('dashboard', 'refresh');
        }
        $this->API = "http://localhost:8080/Takono-laravel/api";
    }


    public function index()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Mata Pelajaran";
        $data['keteranganHalaman'] = "Daftar mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/mapel'));
        $data['mapel'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('mapel/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Mata Pelajaran";
        $data['keteranganHalaman'] = "Halaman tambah mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / Tambah Mata Pelajaran";

        $this->form_validation->set_rules(
            'mata_pelajaran',
            'Mata Pelajaran',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('mapel/tambah');
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_mapel' => $this->input->NULL,
                'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            );

            $insert = $this->curl->simple_post($this->API . '/mapel/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('berhasil', 'ditambahkan!');
            } else {
                $this->session->set_flashdata('gagal', 'ditambahkan!');
            }
            redirect('mapel');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Mata Pelajaran | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Mata Pelajaran";
        $data['keteranganHalaman'] = "Halaman ubah mata pelajaran siswa";
        $data['iconHalaman'] = "ik-book-open";
        $data['breadcrumbs'] = "Mata Pelajaran / Ubah Mata Pelajaran";

        $respon = json_decode($this->curl->simple_get($this->API . '/mapel/' . $id));
        $data['mapel'] = $respon->value;

        $this->form_validation->set_rules(
            'mata_pelajaran',
            'Mata Pelajaran',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('mapel/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_mapel' => $this->input->post('id_mapel'),
                'mata_pelajaran' => $this->input->post('mata_pelajaran'),
            );

            $update = $this->curl->simple_put($this->API . '/mapel/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                $this->session->set_flashdata('berhasil', 'diupdate!');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate!');
            }
            redirect('mapel');
        }
    }

    public function hapus($id)
    {
        $delete = $this->curl->simple_delete($this->API . '/mapel/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));
        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        redirect('mapel');
    }
}

/* End of file Mapel.php */
