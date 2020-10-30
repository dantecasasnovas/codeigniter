<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_control extends CI_Controller {
  public function __construct(){
      parent::__construct();
  }

  public function index()
  {

    $this->load->view('front/headers');
    $this->load->view('front/Login_view');
    $this->load->view('front/footer');
}

public function Control_model(){
    $this->Control_model->add_data($data);
    $this->load->view('front/Login_view');
}
public function loggin($user_name, $user_password) {

    if($this->session->userdata('user_name')){
        redirect('Control/index');
    }
    if(isset($_POST['submit'])){
        if (empty($_POST['user_name']) || empty($_POST['user_password'])) {
            echo "<script>alert('Datos Incompletos');</script>";
            return false;
        } else {
            if($this->Login_model->login($_POST['user_name'],md5($_POST['user_password']))){
                $this->session->set_userdata('user_name',$_POST['user_name']);
                redirect('Control/index');
            }else{
                echo "<script>alert('El nombre o la clave no son correctas');</script>";
            }
        }
    }
}

public function add_user()
{

    $this->load->view('front/headers');
    $this->load->view('front/New_user');
    $this->load->view('front/footer');
}

}

// ---------------------------------------------------------------------------------------

// class Login_control extends CI_controller
// {
//     public function __construct()
//     {
//         parent::__construct();
//         $this->load->helper('url');
//         $this->load->helper('form');
//         $this->load->helper('login_helper');
// 		$this->load->model('Login_model');
//         $this->load->library('form_validation');
//     }
//     public function index()
//     {
//         $this->form_validation->set_rules('user_name' ,'user_name', 'required');
//         $this->form_validation->set_rules('user_password' ,'user_password', 'required|callback_verifica');
//         if($this->form_validation->run() == false)
//         {
//             $data['main_title'] = 'Biblioteca';
//             $data['title2'] = 'Registro';

//             // $this->load->view('templates/header', $data);
//             $this->load->view('login');
//             // $this->load->view('templates/footer');
//         }
//         else
//         {
//             redirect('editoriales/index');
//         }
//     }
//     public function verifica()
//     {
//         $user_name = $this->input->post('user_name');
//         $user_password = $this->input->post('user_password');

//         if($this->Login_model->login($user_name, $user_password))
//         {
//             redirect('front/Home');
//         }
//         else
//         {
//             $this->form_validation->set_message('verifica','Contraseña incorrecta');
//             redirect('');
//         }
//     }
// }