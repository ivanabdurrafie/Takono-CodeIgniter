<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function getAllUser()
    {
        $this->db->order_by('level', 'asc');
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function getUserByID($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function tambahUser()
    {
        $data = [
            "username" => $this->input->post('username', true), 
            "email" => $this->input->post('email', true),
            "password" => htmlspecialchars(md5($this->input->post('password', true))),
            "level" => $this->input->post('level', true),
            "id_siswa" => $this->input->post('id_siswa', true),
            "id_guru" => $this->input->post('id_guru', true),
        ];
        $this->db->insert('user', $data);
    }

    public function autoTambahUserSiswa()
    {
        $data = [
            "username" => $this->input->post('nis', true), 
            "email" => $this->input->post('email', true),
            "password" => htmlspecialchars(md5($this->input->post('nis', true))),
            "level" => "siswa",
            "id_siswa" => $this->input->post('nis', true),
        ];
        $this->db->insert('user', $data);
    }

    public function autoTambahUserGuru()
    {
        $data = [
            "username" => $this->input->post('nip', true), 
            "email" => $this->input->post('email', true),
            "password" => htmlspecialchars(md5($this->input->post('nip', true))),
            "level" => "guru",
            "id_guru" => $this->input->post('nip', true),
        ];
        $this->db->insert('user', $data);
    }

    public function ubahUser()
    {
        $id_siswa = $this->input->post('id_siswa', true);
        if ($id_siswa != null) {
            $data = [
                "username" => $this->input->post('username', true), 
                "email" => $this->input->post('email', true),
                "password" => htmlspecialchars(md5($this->input->post('password', true))),
                "level" => $this->input->post('level', true),
                "id_siswa" => $this->input->post('id_siswa', true),
            ];
        }else{
            $data = [
                "username" => $this->input->post('username', true), 
                "email" => $this->input->post('email', true),
                "password" => htmlspecialchars(md5($this->input->post('password', true))),
                "level" => $this->input->post('level', true),
                "id_guru" => $this->input->post('id_guru', true),
            ];
        }
        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

    public function hapusUser($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete('user');
    }
    
    public function autoHapusUserGuru($id)
    {
        $this->db->where('id_guru', $id);
        $this->db->delete('user');
    }

    public function autoHapusUserSiswa($id)
    {
        $this->db->where('id_siswa', $id);
        $this->db->delete('user');
    }

}

/* End of file User_model.php */
