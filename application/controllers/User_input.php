<?php

class User_input extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model("materi_security_model");
        //loading session library
        $this->load->library('session');
    }

    public function index(){
        $this->load->view('user_input');
    }

    public function tambah(){
        $user = $this->materi_security_model;
        $result = $user->save();
        if ($result > 0 ) $this->sukses() ;
        else $this->gagal();
    }

    public function sukses(){
        redirect(site_url('user_lihat'));
    }

    public function gagal(){
        echo"<script>alert('Input data gagal')</script>";
    }
}
?>