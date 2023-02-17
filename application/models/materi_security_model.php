<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class materi_security_model extends CI_Model{

    private $_table = "materi_security";

    public function getAll(){
        return $this->db->get($this->_table)->result();

    }

    public function getByUsernamePassword(){
        $post1 = $this->input->post();
        $username = $post1["username"];
        $password = $post1["pass"];
        $array = array('username' => $username, 'password' => $password);
        $query = $this->db->get_where($this->_table, $array);
        return $query->row();
    }

    public function save(){
        $post = $this->input->post();
        $this->username = $post["username"];
        $this->password = $post["pass"];
        $this->nama     = $post["nama"];
        $this->email    = $post["email"];
        $this->telepon  = $post["telepon"];
        $this->role     = $post["role"];

        return $this->db->insert($this->_table, $this);
    }


    public function hapus_data($where, $_table) {
        $this->db->where($where);
        $this->db->delete($_table);
    }

    public function edit_data($where, $_table) {
        return $this->db->get_where($_table,$where);
    }

    public function update_data($where,$data,$_table) {
        $this->db->where($where);
        $this->db->update($_table,$data);
    }


    public function getRole(){
        return $this->db->query("select role , count(role) as jumlah FROM materi_security group by role")->result();
    }

    public function countRole($key)
    {
        return $this->db->query("select count(role) as jumlah from materi_security where role like '$key'")->result();
    }
}


?>