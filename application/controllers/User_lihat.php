<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class User_lihat extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("materi_security_model");
        //loading session library
        $this->load->library('session');
    }

    public function index(){
        $data["user"] = $this->materi_security_model->getAll();
        $this->load->view('user_lihat', $data);
    }


    public function hapus ($username) 
    {
        $where = array ('username' => $username);
        $this->materi_security_model->hapus_data($where, 'materi_security');
        redirect(site_url('user_lihat'));
    }

    public function edit($username) {
        $where = array('username' => $username);
        $data["user"] = $this->materi_security_model->edit_data($where, 'materi_security') -> result();
		$this->load->view('user_edit', $data);
    }

    public function update() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $telepon = $this->input->post('telepon');
        $role = $this->input->post('role');

        $data = array (
            'username' => $username,
            'password' => $password,
            'nama' => $nama,
            'email' => $email,
            'telepon' => $telepon,
            'role' => $role,
        );
        $where = array (
            'username' => $username
        );

        $this->materi_security_model->update_data($where,$data,'materi_security');
        redirect(site_url('user_lihat'));
    }
}