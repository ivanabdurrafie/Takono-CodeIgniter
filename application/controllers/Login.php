<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }


    public function index()
    {
        $data['title'] = "Masuk | Takono. Forum Tanya Jawab Sekolah";
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array(
                'required' => '%s masih kosong loh.'
            )
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            array(
                'required' => '%s masih kosong loh.'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('login/index', $data);
            $this->load->view('template/footer-login');
        } else {
            $this->proseslogin();
        }
    }

    public function prosesLogin()
    {
        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars(md5($this->input->post('password')));

        $ceklogin = $this->login_model->login($username, $password);

        if ($ceklogin) {
            foreach ($ceklogin as $row);
            $this->session->set_userdata('id_user', $row->id_user);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('email', $row->email);
            $this->session->set_userdata('id_siswa', $row->id_siswa);
            $this->session->set_userdata('id_guru', $row->id_guru);
            $this->session->set_userdata('level', $row->level);
            redirect('dashboard', 'refresh');
        } else {
            $this->session->set_flashdata('gagal-login', 'Sepertinya kamu memasukkan data yang salah');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('dashboard', 'refresh');
    }

    public function lupaPassword()
    {
        $data['title'] = "Lupa Password | Takono. Forum Tanya Jawab Sekolah";

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            array(
                'required' => '%s masih kosong loh.'
            )
        );

        $this->form_validation->set_rules(
            'email',
            'email',
            'required|valid_email',
            array(
                'required' => 'Heii, %smu masih kosong loh',
                'valid_email' => 'Heii, %smu formatnya salah'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('login/lupa-password');
            $this->load->view('template/footer-login');
        } else {
            $this->prosesLupaPassword();
        }
    }

    public function prosesLupaPassword()
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');

        $proses = $this->login_model->resetPassword($username, $email);
        if ($proses) {
            $this->session->set_flashdata('gagal', 'Direset. <br> Ups, sepertinya kamu memasukkan data yang salah');
        } else {
            $this->session->set_flashdata('berhasil', 'Direset loh');
        }

        redirect('login/lupapassword');
    }
}

/* End of file Login.php */
