<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function ceklogin(){
        $post = $this->input->post();

        if(isset($post["username"]) && isset($post["pass"])){
            //cek user
            $user = $this->materi_security_model;
            $data = $user->getByUsernamePassword();

            if ($data != null) {
                $username = $data->username;
                $name = $data->nama;
                $role = $data->role;
                $password = $data->password;

                //adding data to session
                $newdata = array(
                    'user_username' => $username,
                    'user_name' => $name,
                    'user_role' => $role
                );
                $this->session->set_userdata($newdata);

                if($role == "Admin") {
                    redirect(site_url('beranda'));
                }
                else if($role == "Dosen"){
                    echo "<script>alert('Hallo Dosen !'); </script>";
                }
                else{
                    echo"<script>alert('User atau Password tidaak terdaftar!');</script>";

                }
                

            }
            else {
                $this->load->view("login");
            }
        }
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->model("materi_security_model");
    }

    public function index()
    {
       
        $this->load->view('login');
    }

    public function Logout(){
       //session_start();
        session_destroy();

        if (isset($_COOKIE["materi_security"]) AND isset($_COOKIE["pass"])){
            setcookie("user",  '', time() - (3600));
        }
        $this->load->view('login');
    }
}
?>