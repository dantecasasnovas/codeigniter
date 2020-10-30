<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('Profile_model');
	}

	public function profile(){
		$id['user'] = $this->session->get_userdata();
		// var_dump($id['user']['user_id']);die();
		$this->load->view('front/access_granted/headers');
		$this->load->view('front/access_granted/profile',$id['user']['user_id']);
	}

	public function edit(){
		$this->input->post('user_id','user_name','user_last_name','user_phone','user_email');
		// var_dump($valor);die();
		{
			$data = [
				'edit' => [
					'user_id' => $this->input->post('user_id'),
					'user_name' => $this->input->post('user_name'),
					'user_last_name' => $this->input->post('user_last_name'),
					'user_phone' => $this->input->post('user_phone'),
					'user_email' => $this->input->post('user_email'),
				]
			];
			// var_dump($data['edit']);die();
		}
			$this->Profile_model->edit($data);
			$this->load->view('front/Login_view');
	}

	public function delete($view){
		$id = $this->input->post(['user']);
		var_dump($id);die();

		$delete = $this->input->post($id);
			$this->Profile_model->delete($delete);

	}
}

?>