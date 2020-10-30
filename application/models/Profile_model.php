<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

    function edit($data){
        $this->db->where('user_id', $data['edit']['user_id']);
        // var_dump($data);die();
        $query = $this->db->update('user', $data['edit']);
        // var_dump($data['add']['user_id']);die();
		// $this->db->update('user')->set($user_id);
        redirect ('Profile/profile');
    }

    function delete($delete){
        var_dump($delete);die();
        $this->db->delete('user', $delete);
    }
}
?> 
