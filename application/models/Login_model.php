<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function __construct(){
	parent::__construct();
	$this->load->database();
	}

	public function login($user_name,$user_password)
		{
			$q = $this->db->where('user_name',$user_name);
			$q = $this->db->where('user_password',$user_password);
			$q = $this->db->get('user_login');
			if($q->num_rows()>0)
			{
				return true;
			}else{
				return false;
			}
		}
	}
