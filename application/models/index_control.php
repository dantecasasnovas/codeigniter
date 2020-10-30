<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_control extends CI_Model {
	function __construct(){
	parent::__construct();
	$this->load->database();
	}

	public function getIndex_control(){
		return $this->db->get('user_login');
	}

	public function getIndex_controlByName($name=''){
		$this->db->query("SELECT * FROM user_login = '".$name."' LIMIT 1");
		return $result->row();
	}

}

