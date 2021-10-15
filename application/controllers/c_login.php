<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function index()
    {
        if(isset($_POST['password'])){
            $this->load->model('m_login');
            $res = $this->m_login->login($_POST['login'],base64_encode($_POST['password']));
			if(!$res){
                redirect('c_login#bad-password');

			}
			else{
                $this->session->set_userdata('id', $res['id_usuario']);
                $this->session->set_userdata('tipo', $res['tipo']);
                $this->session->set_userdata('login',$_POST['login']);
                var_dump($_SESSION['tipo']);
                redirect('c_principal');
            }
            
    }
    $this->load->view('v_login');
}

public function logout(){
    $this->session->sess_destroy();
    
    redirect('c_principal');
    
}
}

/* End of file C_login.php */
