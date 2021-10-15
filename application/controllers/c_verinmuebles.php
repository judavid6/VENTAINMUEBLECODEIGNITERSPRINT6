<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class C_verinmuebles extends CI_Controller {


    
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('login')){
			redirect('c_principal');
			
		}
    }
    
    public function index()
    {
        
        $result =$this->db->query("SELECT * FROM productos WHERE id_usuario='".$_SESSION['id']."'");
		$data = array('consulta'=>$result);
		$identificador=$_SESSION['id'];
		$this->load->model('m_verinmuebles');
		$data["info"]=$this->m_verinmuebles->buscar($identificador);
		
    $this->load->view('v_verinmuebles',$data);
    
    }
    public function postulados($id = NULL){
        if($id != NULL){
             $result =$this->db->query("SELECT * FROM usuarios INNER JOIN postulaciones ON postulaciones.id_usuario=usuarios.id_usuario AND postulaciones.id_producto=$id");
		$data = array('consulta'=>$result);
		$this->load->model('m_verinmuebles');
        $data["info"]=$this->m_verinmuebles->buscarpostulantes($id);
         $this->load->view('v_verpostulados',$data);
           }
       
    }
    public function descartarpost(){

    }

    public function emailpost($email = NULL){
        if($email != NULL){
            
                 $this->load->library('email');

                $this->email->from('inmueblesudi@gmail.com', 'inmuebles udi');
                $this->email->to($email);


                $this->email->subject('Enviando email');
                $this->email->message('E we si envia xdxd');

                $this->email->send();
                $data['param2'] = 2;
                    $this->load->view('jspush.php',$data); 
                    
			          
        }
        
    }

}

/* End of file C_verinmuebles.php */
