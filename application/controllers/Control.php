<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Control extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('Control_model');
	}

	public function index(){
		$this->load->view('front/headers');
		$this->load->view('front/Login_view');
	}

	public function Control_model(){

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
		// var_dump($data['name']);die();
	$this->form_validation->set_rules($data);

	if ($this->form_validation->run() == FALSE);
	{
		// var_dump($data);die();
			$this->Control_model->add_data($data['name']);
			$this->load->view('front/headers');
			$this->load->view('front/Login_view');
	}
		// else
		// {
		// 	$this->load->view('front/headers');
		// 	$this->load->view('front/New_user');
		// }
}

public function new_user(){
	$this->load->view('front/headers');
	$this->load->view('front/New_user');
}

public function login() {

	$this->input->post('user_name','user_password');
	{
		$data = [
			'login' => [
				'user_email' 	=> $this->input->post('user_email'),
				'user_password' => $this->input->post('user_password'),
			]
		];
		$logged = $this->Control_model->login($data);
        // $view = $this->input->post($receive);

		$view['user'] = $this->session->get_userdata();

			// var_dump($view);die();

		if($view['user'] == 1);
		{
				// var_dump($view);die();

			$this->load->view('/front/access_granted/headers');
			$this->load->view('/front/access_granted/Home',$view['user']);
		}
	}
}

public function home(){
	$this->load->view('front/access_granted/headers');
	$this->load->view('front/access_granted/Home');
}

public function log_out(){
	$this->session->sess_destroy();
	redirect('');
}

}

?>
