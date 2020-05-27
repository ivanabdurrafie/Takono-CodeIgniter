<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TanyaJawab extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost:8000/api";
    }


    public function index()
    {
        $data['title'] = "Tanya Jawab | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Ayo bertanya dan bantu jawab pertanyaan ini";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / ";

        $respon = json_decode($this->curl->simple_get($this->API . '/pertanyaan/'));
        $data['pertanyaan'] = $respon->value;

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->load->view('template/header', $data);

        if ($this->session->userdata('level') == "admin") {
            $this->load->view('template/wrapper-admin');
        } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
            $this->load->view('template/wrapper-user');
        } else {
            $this->load->view('template/wrapper-guest');
        }

        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-jawab/index', $data);
        $this->load->view('template/footer');
    }

    public function TanyaJawabku($id)
    {
        if ($this->session->userdata('level') == null) {
            redirect('dashboard', 'refresh');
        }

        $data['title'] = "Daftar Pertanyaan dan Jawaban | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Pertanyaan dan Jawabanku";
        $data['keteranganHalaman'] = "Hai, ini daftar pertanyaan dan jawabanmu.";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / Q & A ku";

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/nip/' . $id));
            $data['gurudetail'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/nis/' . $id));
            $data['siswadetail'] = $respon->value;
        }

        $this->load->view('template/header', $data);
        if ($this->session->userdata('level') == "admin") {
            $this->load->view('template/wrapper-admin');
        } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
            $this->load->view('template/wrapper-user');
        } else {
            $this->load->view('template/wrapper-guest');
        }
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('tanya-jawab/tanya-jawabku');
        $this->load->view('template/footer');
    }

    public function tambahPertanyaan()
    {
        if ($this->session->userdata('level') == null) {
            redirect('tanya', 'refresh');
        }

        $data['title'] = "Buat Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Ada yang bingung? yuk buat pertanyaan";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / Buat Pertanyaan";

        $respon = json_decode($this->curl->simple_get($this->API . '/mapel/'));
        $data['mapel'] = $respon->value;

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->form_validation->set_rules(
            'pertanyaan',
            'Pertanyaan',
            'required',
            array(
                'required' => 'Kolom %s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'id_mapel',
            'Mata Pelajaran',
            'required',
            array(
                'required' => 'Kamu masih belum memilih %s loh!',
            )
        );

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);

            if ($this->session->userdata('level') == "admin") {
                $this->load->view('template/wrapper-admin');
            } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
                $this->load->view('template/wrapper-user', $data);
            } else {
                $this->load->view('template/wrapper-guest');
            }

            $this->load->view('template/sidebar-user');
            $this->load->view('template/breadcrumbs');
            $this->load->view('tanya-jawab/tambah', $data);
            $this->load->view('template/footer');
        } else {
            if (empty($_FILES['foto']['name'])) {
                $data = array(
                    'id_pertanyaan' => $this->input->NULL,
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'id_mapel' => $this->input->post('id_mapel'),
                    'id_user' => $this->input->post('id_user'),
                    'oleh' => $this->input->post('oleh'),
                );
            } else {
                $data = array(
                    'id_pertanyaan' => $this->input->NULL,
                    'pertanyaan' => $this->input->post('pertanyaan'),
                    'id_mapel' => $this->input->post('id_mapel'),
                    'id_user' => $this->input->post('id_user'),
                    'oleh' => $this->input->post('oleh'),
                    'foto' => $this->uploadFotoPertanyaan(),
                );
            }

            $insert = $this->curl->simple_post($this->API . '/pertanyaan/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

            if ($insert) {
                $this->session->set_flashdata('berhasil', 'ditambahkan!');
            } else {
                $this->session->set_flashdata('gagal', 'ditambahkan!');
            }
            redirect('tanyajawab');
        }
    }

    public function tambahKomentar()
    {
        $id_pertanyaan = $this->input->post('id_pertanyaan');

        if (empty($_FILES['foto']['name'])) {
            $data = array(
                'id_komentar' => $this->input->NULL,
                'id_pertanyaan' => $this->input->post('id_pertanyaan'),
                'komentar' => $this->input->post('komentar'),
                'skor' => $this->input->post('skor'),
                'id_user' => $this->input->post('id_user'),
                'oleh' => $this->input->post('oleh'),
            );
        } else {
            $data = array(
                'id_komentar' => $this->input->NULL,
                'id_pertanyaan' => $this->input->post('id_pertanyaan'),
                'komentar' => $this->input->post('komentar'),
                'skor' => $this->input->post('skor'),
                'id_user' => $this->input->post('id_user'),
                'oleh' => $this->input->post('oleh'),
                'foto' => $this->uploadFotoJawaban(),
            );
        }

        $insert = $this->curl->simple_post($this->API . '/komentar/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));

        if ($insert) {
            $this->session->set_flashdata('berhasil', 'ditambahkan!');
        } else {
            $this->session->set_flashdata('gagal', 'ditambahkan!');
        }
        redirect('tanyajawab/detailpertanyaan/' . $id_pertanyaan);
    }

    public function detailPertanyaan($id)
    {
        $data['title'] = "Lihat Pertanyaan | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Tanya Jawab";
        $data['keteranganHalaman'] = "Yuk bantu jawab pertanyaan ini";
        $data['iconHalaman'] = "ik-message-circle";
        $data['breadcrumbs'] = "Tanya Jawab / Lihat Pertanyaan";

        $respon = json_decode($this->curl->simple_get($this->API . '/pertanyaan/' . $id));
        $data['pertanyaan'] = $respon->value;

        $respon = json_decode($this->curl->simple_get($this->API . '/komentar/' . $id));
        $data['komentar'] = $respon->value;

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->form_validation->set_rules(
            'komentar',
            'Jawaban',
            'required',
            array(
                'required' => 'Heiii. Kolom %s ini masih kosong loh!'
            )
        );

        if ($this->form_validation->run() ==  FALSE) {
            $this->load->view('template/header', $data);

            if ($this->session->userdata('level') == "admin") {
                $this->load->view('template/wrapper-admin');
            } elseif ($this->session->userdata('level') == "guru" || $this->session->userdata('level') == "siswa") {
                $this->load->view('template/wrapper-user');
            } else {
                $this->load->view('template/wrapper-guest');
            }

            $this->load->view('template/sidebar-user');
            $this->load->view('template/breadcrumbs');
            $this->load->view('tanya-jawab/detail', $data);
            $this->load->view('template/footer');
        } else {
            $this->tambahKomentar();
        }
    }

    public function like()
    {
        $id = $this->input->post('id_komentar');
        $id_pertanyaan = $this->input->post('id_pertanyaan');
        $like = $this->curl->simple_put($this->API . '/komentar/like/' . $id, array(CURLOPT_BUFFERSIZE => 10));

        if ($like) {
            $this->session->set_flashdata('berhasil', '. Terimakasih likenya!');
        } else {
            $this->session->set_flashdata('gagal', '. Ups, sepertnya gagal menambahkan like!');
        }

        redirect('tanyajawab/detailpertanyaan/' . $id_pertanyaan);
    }

    private function uploadFotoJawaban()
    {
        $config['upload_path']          = './uploads/foto-jawaban';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '2048';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }

    private function ubahFotoJawaban()
    {
        if (empty($_FILES['foto']['name'])) {
            $foto = $this->input->post('fotoLama');
        } else {
            $foto = $this->uploadFotoJawaban();
        }
        return $foto;
    }

    private function uploadFotoPertanyaan()
    {
        $config['upload_path']          = './uploads/foto-soal';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '2048';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }

    private function ubahFotoPertanyaan()
    {
        if (empty($_FILES['foto']['name'])) {
            $foto = $this->input->post('fotoLama');
        } else {
            $foto = $this->uploadFotoPertanyaan();
        }
        return $foto;
    }
}

/* End of file TanyaJawab.php */
