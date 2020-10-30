<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Operaciones extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
	}

	public function Transferir()
	{
		$user_id = $_POST['user_id'];
		$enviado = $_POST['monto_transferir'];
		$receptor = $_POST['receptor'];
		$monto_emisor = $_POST['amount'];
		if($monto_emisor = $_POST['amount'] <= 0){
			// redirect('Control/transfer');

		}else{
		$monto_receptor = $this->db->query("SELECT * FROM user_login a INNER JOIN user_log b WHERE a.user_id=b.receptor AND b.receptor='".$_POST['receptor']."' ");
		foreach ($monto_receptor->result() as $fila_receptor)
		{
			$resultado_receptor = ($fila_receptor->amount + $enviado);
			$this->db->query("UPDATE user_login SET amount='$resultado_receptor' WHERE user_id='".$_POST['receptor']."' ");

		}

		$monto_emisor = $this->db->query("SELECT * FROM user_login a INNER JOIN user_log b WHERE a.user_id=b.receptor AND b.receptor='".$_POST['user_id']."' ");
		foreach ($monto_emisor->result() as $fila_emisor)
		{
			$resultado_emisor = ($fila_emisor->amount - $monto_emisor);
			$this->db->query("UPDATE user_login SET amount='$resultado_emisor' WHERE user_id='".$_POST['user_id']."' ");
			echo "<script>alert('Transferencia Excitosa');javascript:history.back;</script>";
		}
		// echo "<script>alert('Monto a Transferir se excede al monto de la cuenta');javascript:history.back;</script>";
		// redirect('Control/transfer');
}

}
}
