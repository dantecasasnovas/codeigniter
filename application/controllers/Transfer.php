<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transfer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('Transfer_model');
	}

	public function transfer(){

	$datos = $this->input->post('user_name','user_last_name','user_phone','user_email','user_password');
	// var_dump($datos);die();
		$data = [
		'name' => [
			'user_name' 	=> $this->input->post('user_name'),
			'user_last_name' => $this->input->post('user_last_name'),
			'user_phone' 	 => $this->input->post('user_phone'),
			'user_email' 	 => $this->input->post('user_email'),
			'user_password'  => $this->input->post('user_password'),
		],
	];

		$this->load->view('front/access_granted/headers');
		$this->load->view('front/access_granted/transfer',$data['name']);
	}



}
?>