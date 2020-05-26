<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == null) {
            redirect('dashboard', 'refresh');
        }
        $this->API = "http://localhost:8000/api";
        $this->load->model('user_model');
    }


    public function detail($id)
    {
        $data['title'] = "Profil | Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Profil";
        $data['keteranganHalaman'] = "Hai, ini profil pribadimu";
        $data['iconHalaman'] = "ik-user";
        $data['breadcrumbs'] = "Profil / ";

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/nip/' . $id));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/nis/' . $id));
            $data['siswa'] = $respon->value;
        }

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');
        $this->load->view('profil/detail', $data);
        $this->load->view('template/footer');
    }

    public function pengaturan($id)
    {
        $data['title'] = "Pengaturan Profil| Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Penganturan Profil";
        $data['keteranganHalaman'] = "Ada yang ingin diubah?";
        $data['iconHalaman'] = "ik-settings";
        $data['breadcrumbs'] = "Profil / Pengaturan Profil";

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/nip/' . $id));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/nis/' . $id));
            $data['siswa'] = $respon->value;
        }

        $this->load->view('template/header', $data);
        $this->load->view('template/wrapper-user', $data);
        $this->load->view('template/sidebar-user');
        $this->load->view('template/breadcrumbs');

        if ($this->session->userdata('level') == "guru") {
            $this->load->view('profil/pengaturan-guru', $data);
        } else {
            $this->load->view('profil/pengaturan-siswa', $data);
        }
        $this->load->view('template/footer');
    }

    public function ubahProfil($id)
    {
        $data['title'] = "Pengaturan Profil| Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Penganturan Profil";
        $data['keteranganHalaman'] = "Ada yang ingin diubah?";
        $data['iconHalaman'] = "ik-settings";
        $data['breadcrumbs'] = "Profil / Pengaturan Profil";

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/' . $id));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/' . $id));
            $data['siswa'] = $respon->value;
        }

        $this->form_validation->set_rules(
            'txtFoto',
            'Foto',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-user', $data);
            $this->load->view('template/sidebar-user');
            $this->load->view('template/breadcrumbs');

            if ($this->session->userdata('level') == "guru") {
                $this->load->view('profil/pengaturan-guru', $data);
            } else {
                $this->load->view('profil/pengaturan-siswa', $data);
            }

            $this->load->view('template/footer');
        } else {
            if ($this->session->userdata('level') == "guru") {
                $data = array(
                    'id_guru' => $this->input->post('id_siswa'),
                    'nip' => $this->input->post('nip'),
                    'nama' => $this->input->post('nama'),
                    'jenkel' => $this->input->post('jenkel'),
                    'email' => $this->input->post('email'),
                    'foto' => $this->ubahFoto(),
                );

                $update = $this->curl->simple_put($this->API . '/guru/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
            } else {
                $data = array(
                    'id_siswa' => $this->input->post('id_siswa'),
                    'nis' => $this->input->post('nis'),
                    'nama' => $this->input->post('nama'),
                    'jenkel' => $this->input->post('jenkel'),
                    'id_kelas' => $this->input->post('id_kelas'),
                    'email' => $this->input->post('email'),
                    'foto' => $this->ubahFoto(),
                );

                $update = $this->curl->simple_put($this->API . '/siswa/update/' . $id, $data, array(CURLOPT_BUFFERSIZE => 10));
            }

            if ($update) {
                $this->session->set_flashdata('berhasil', 'diupdate!');
            } else {
                $this->session->set_flashdata('gagal', 'diupdate!');
            }

            redirect('profil/ubahprofil/' . $id);
        }
    }

    public function ubahAkun()
    {
        $data['title'] = "Pengaturan Profil| Takono. Forum Tanya Jawab Sekolah";
        $data['judulHalaman'] = "Penganturan Profil";
        $data['keteranganHalaman'] = "Ada yang ingin diubah?";
        $data['iconHalaman'] = "ik-settings";
        $data['breadcrumbs'] = "Profil / Pengaturan Profil";

        if ($this->session->userdata('level') == "guru") {
            $respon = json_decode($this->curl->simple_get($this->API . '/guru/'));
            $data['guru'] = $respon->value;
        } else {
            $respon = json_decode($this->curl->simple_get($this->API . '/siswa/'));
            $data['siswa'] = $respon->value;
        }

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh!',
            )
        );

        $this->form_validation->set_rules(
            'repassword',
            'Konfrimasi Password',
            'required|matches[password]',
            array(
                'required' => '%s masih kosong loh!',
                'matches[password]' => 'Hmm, sepertinya %s tidak sama. Cek lagi ya!',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/wrapper-user', $data);
            $this->load->view('template/sidebar-user');
            $this->load->view('template/breadcrumbs');

            if ($this->session->userdata('level') == "guru") {
                $this->load->view('profil/pengaturan-guru', $data);
            } else {
                $this->load->view('profil/pengaturan-siswa', $data);
            }
            
            $this->load->view('template/footer');
        } else {
            $this->user_model->ubahUser();
            $this->session->set_flashdata('berhasil', 'diupdate');
            redirect('profil/ubahakun', 'refresh');
        }
    }

    private function uploadFoto()
    {
        $config['upload_path']          = './uploads/profil';
        $config['allowed_types']        = 'jpeg|jpg|png|gif|svg';
        $config['max_size']             = '2048';

        $this->upload->initialize($config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data('file_name');
        }
    }

    private function ubahFoto()
    {
        if (empty($_FILES['foto']['name'])) {
            $foto = $this->input->post('fotoLama');
        } else {
            $foto = $this->uploadFoto();
        }
        return $foto;
    }
}
    
/* End of Profil.php */
