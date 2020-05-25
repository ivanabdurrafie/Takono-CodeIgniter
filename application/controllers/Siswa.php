<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
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
        $data['title'] = "Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Siswa";
        $data['keteranganHalaman'] = "Daftar siswa yang menggunakan sistem <b>Takono.</b>";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa'));
        $data['siswa'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/index', $data);
        $this->load->view('template/footer');
    }

    public function detail($id)
    {
        $data['title'] = "Detail Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Detail Data Siswa";
        $data['keteranganHalaman'] = "Halaman detail data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Detail Data Siswa";

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa/' . $id));
        $data['siswa'] = $respon->value;

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-admin');
        $this->load->view('template/sidebar-admin');
        $this->load->view('template/breadcrumbs');
        $this->load->view('siswa/detail', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = "Tambah Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tambah Data Siswa";
        $data['keteranganHalaman'] = "Halaman tambah data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Tambah Data Siswa";

        $respon = json_decode($this->curl->simple_get($this->API . '/kelas'));
        $data['kelas'] = $respon->value;

        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|numeric',
            array(
                'required' => '%s masih kosong loh!',
                'numeric' => 'Hei, %s harus diisi angka!'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|alpha_numeric_spaces',
            array(
                'required' => '%s masih kosong loh!',
                'alpha_numeric_spaces' => 'Hei, %s harus diisi huruf!'
            )
        );

        $this->form_validation->set_rules(
            'id_kelas',
            'Kelas',
            'required',
            array(
                'required' => '%s masih kosong loh!',
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
            $this->load->view('siswa/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_siswa' => $this->input->NULL,
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'email' => $this->input->post('email'),
                'jenkel' => $this->input->post('jenkel'),
                'id_kelas' => $this->input->post('id_kelas'),
            );

            $insert = $this->curl->simple_post($this->API . '/siswa/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('berhasil', 'ditambahkan!');
            } else {
                $this->session->set_flashdata('gagal', 'ditambahkan!');
            }

            redirect('siswa');
        }
    }

    public function edit($id)
    {
        $data['title'] = "Ubah Data Siswa | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Ubah Data Siswa";
        $data['keteranganHalaman'] = "Halaman ubah data siswa";
        $data['iconHalaman'] = "ik-users";
        $data['breadcrumbs'] = "Siswa / Ubah Data Siswa";

        $respon = json_decode($this->curl->simple_get($this->API . '/siswa/' . $id));
        $data['siswa'] = $respon->value;

        $respon = json_decode($this->curl->simple_get($this->API . '/kelas'));
        $data['kelas'] = $respon->value;

        $this->form_validation->set_rules(
            'nis',
            'NIS',
            'required|numeric',
            array(
                'required' => '%s masih kosong loh!',
                'numeric' => 'Hei, %s harus diisi angka!'
            )
        );

        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|alpha_numeric_spaces',
            array(
                'required' => '%s masih kosong loh!',
                'alpha' => 'Hei, %s harus diisi huruf!'
            )
        );

        $this->form_validation->set_rules(
            'id_kelas',
            'Kelas',
            'required',
            array(
                'required' => '%s masih kosong loh!',
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
            $this->load->view('siswa/edit', $data);
            $this->load->view('template/footer');
        } else {
            $data = array(
                'id_siswa' => $this->input->post('id_siswa'),
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'email' => $this->input->post('email'),
                'jenkel' => $this->input->post('jenkel'),
                'id_kelas' => $this->input->post('id_kelas'),
            );

            $update = $this->curl->simple_put($this->API . '/siswa/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($update) {
                $this->session->set_flashdata('berhasil', 'diupdate!');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate!');
            }

            redirect('siswa');
        }
    }

    public function hapus($id)
    {
        $delete = $this->curl->simple_delete($this->API . '/siswa/delete/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($delete) {
            $this->session->set_flashdata('berhasil', 'dihapus!');
        } else {
            $this->session->set_flashdata('gagal', 'dihapus!');
        }
        
        redirect('siswa');
    }
}

/* End of file Siswa.php */
