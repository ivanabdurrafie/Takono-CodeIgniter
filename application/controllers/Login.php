<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
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
            $this->load->view('login/index');
            $this->load->view('template/footer-login');
        } else {
            $this->proseslogin();
        }
    }

    public function prosesLogin()
    {
        redirect('dashboard_user');
    }

    public function lupaPassword()
    {
        $data['title'] = "Lupa Password | Takono. Forum Tanya Jawab Sekolah";


        $this->form_validation->set_rules(
            'email',
            'email',
            'required',
            array(
                'required' => 'Heii, %smu masih kosong loh'
            )
        );

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('login/lupa-password');
            $this->load->view('template/footer-login');
        } else {
            # code...
            $this->mahasiswa_model->tambahdatamhs();
            // untuk flashdata mempunyai 2 paramenter(nama flashdata/alias, isi dari flashdatanya)
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('mahasiswa', 'refresh');
        }
    }
}

/* End of file Login.php */
