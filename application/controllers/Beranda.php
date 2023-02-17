<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->model('materi_security_model');
		$chart = $this->materi_security_model->getRole();
		$total = 0;
		foreach($chart as $c){
			$total = $total + $c->jumlah;
		};
		$data = [
			'data' => $chart,
			'total' => $total,
			'admin' => $this->materi_security_model->countRole('Admin'),
			'dosen' => $this->materi_security_model->countRole('Dosen')
		];
		$this->load->view('layout/header');
//$this->load->view('layout/navbar');
		$this->load->view('dashboard',$data);
        $this->load->view('layout/footer');
        
	}
}
