<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function login($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $username); 
        $this->db->where('password', $password);
        $this->db->limit(1);

        $query = $this->db->get();
        if ($query->num_rows() == 1)
        {
            return $query->result();
        } else {
            return false;
        }
    }

    public function resetPassword()
    {
        $data = [
            "username" => $this->input->post('username', true), 
            "email" => $this->input->post('email', true),
            "password" => htmlspecialchars(md5($this->input->post('username', true))),
        ];

        $this->db->where('username', $this->input->post('username'));
        $this->db->where('email', $this->input->post('email'));
        $this->db->update('user', $data);

    }
}

/* End of file Login_model.php */
