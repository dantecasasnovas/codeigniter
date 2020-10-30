<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_control extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('bank_model');
	}

	function dataLoggin(){
		
	}