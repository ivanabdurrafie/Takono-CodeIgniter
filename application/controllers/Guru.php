<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
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
        $data['title'] = "Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Guru";
        $data['keteranganHalaman'] = "Daftar guru yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/guru'));
        $data['guru'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data Guru";
        $data['keteranganHalaman'] = "Halaman detail data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Detail Data Guru";

        $respon = json_decode($this->curl->simple_get($this->API . '/guru/' . $id));
        $data['guru'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('guru/detail');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data Guru";
        $data['keteranganHalaman'] = "Halaman tambah data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Tambah Data Guru";

        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'required|numeric',
            array(
                'required' => '%s masih kosong loh!',
                'numeric' => 'Hei, %s harus diisi angka!'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s masih kosong loh!',
                'valid_email' => '%s format emailnya salah loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('guru/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_guru' => $this->input->NULL,
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'jenkel' => $this->input->post('jenkel'),
            );

            $insert = $this->curl->simple_post($this->API . '/guru/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('berhasil', 'ditambahkan!');
            } else {
                $this->session->set_flashdata('gagal', 'ditambahkan!');
            }

            redirect('guru');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Ubah Data Guru | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data Guru";
        $data['keteranganHalaman'] = "Halaman ubah data guru";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Guru / Ubah Data Guru";

        $respon = json_decode($this->curl->simple_get($this->API . '/guru/' . $id));
        $data['guru'] = $respon->value;

        $this->form_validation->set_rules(
            'nip',
            'NIP',
            'required|numeric',
            array(
                'required' => '%s masih kosong loh!',
                'numeric' => 'Hei, %s harus diisi angka!'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            array(
                'required' => '%s masih kosong loh!'
            )
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            array(
                'required' => '%s masih kosong loh!',
                'valid_email' => '%s format emailnya salah loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-admin');
            $this->load->view('template/sidebar-admin');
            $this->load->view('template/breadcrumbs');
            $this->load->view('guru/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_guru' => $this->input->post('id_guru'),
                'nip' => $this->input->post('nip'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'jenkel' => $this->input->post('jenkel'),
            );

            $update = $this->curl->simple_put($this->API . '/guru/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($update) {
                $this->session->set_flashdata('berhasil', 'diupdate!');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate!');
            }

            redirect('guru');
        }
    }

    public function hapus($id)
    {
        $delete = $this->curl->simple_delete($this->API . '/guru/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        
        redirect('guru');
    }
}

/* End of file Guru.php */
