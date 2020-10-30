<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Control_model extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function login($data){

		$this->db->select(); //Si no tiene un campo en especifico entonces estamos seleccionando todos los campos...
		$this->db->from('user as a'); //Seleccionamos la tabla user como 'a'
		$this->db->join('wallet as b','b.wallet_user_id = a.user_id'); //Seleccionamos los campos donde se unen wallet con user
	    $this->db->where('user_email',$data['login']['user_email']); //Le asignamos una dependencia al campo user_email con los datos obtenidos del formulario login
	    $this->db->where('user_password',$data['login']['user_password']);  //Le asignamos una dependencia al campo user_password con los datos obtenidos del formulario login
	    $query = $this->db->get();
                // var_dump($this->db->queries);die();

        if($query->num_rows() == 1) //Recorremos las filas en busqueda de la existencia de los datos anidados almacenados en la query
        {

            $row=$query->row(); // Si se cumple la operación anterior se le asigna un valor a la fila recorrida
            // var_dump($row);die();

        if($data['login']['user_password'] === $_POST['user_password']); // Comprobamos que el password sea la misma al campo de la base de datos
            { // si se cumple la operación anterior realizamos un arreglo con los datos traidos de la base de datos en donde los datos almacenados en row sean los datos principales
                $receive = [
                	'user'     => [
                        'user_id'        => $row->user_id,
                        'user_name'      => $row->user_name,
                        'user_last_name' => $row->user_last_name,
                        'user_phone'     => $row->user_phone,
                        'user_email'     => $row->user_email,
                        'wallet_money'   => $row->wallet_money
                    ]
            ]; // Fin del arreglo

                $this->session->set_userdata($receive['user']); //Asignamos a la sesión el arreglo
                return true;
            }
        }else{
        	redirect('');
        }
        $this->session->unset_userdata($data);
        return false;
    }

    function add_data($data){


      //   if($this->db->insert('user',$data)){
      // }else{
      //     return $this->db->error();
      // }



        // var_dump($data['name']);die();
      $this->db->insert('user',$data);
          $value = $this->db->insert_id();
          $data['user']['wallet_user_id'] = $value;
            $this->db->insert('wallet', $data['user']); //Luego insertamos los datos almacenados en el arreglo a la tabla asociativa
            return true;
}
}
?>
