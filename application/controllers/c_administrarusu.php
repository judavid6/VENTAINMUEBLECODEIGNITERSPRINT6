<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class C_administrarusu extends CI_Controller {

    
    public function __construct()
    {
		parent::__construct();
		if(!$this->session->userdata('login')){
			redirect('c_principal');
			
		}
       $this->load->model('m_administrarusu');
    }
    
    public function index()
    {
        
        $data['listaUsuario'] = $this->m_administrarusu->listUsuario();
        $this->load->view('v_administrarusu', $data);
    }

    public function delete($id = NULL){
        if($id != NULL){
         $this->m_administrarusu->deleteUsuario($id);
         redirect('c_administrarusu');
        }

    }
    public function edit($id = NULL){
        if($id != NULL){
         $data['editusuario']= $this->m_administrarusu->editUsuario($id);
         
         $this->load->view('v_editusu', $data);
         
        }

    }
    public function update_usuario()
    {
		
		    $id_usuario=$this->input->post('id_usuario');
            $nombres =$this->input->post("nombres");
			$apellidos =$this->input->post("apellidos");
			$correo_electronico =$this->input->post("correo_electronico");
			$celular =$this->input->post("celular");
            $estatura =$this->input->post("estatura");
            $login =$this->input->post("login");
            $tipo =$this->input->post("tipo");
			$password =$this->input->post("password");

			$this->load->model('m_administrarusu');

			$res = $this->m_administrarusu->actualizar($id_usuario,$nombres,$apellidos,$correo_electronico,$celular,$estatura,$login,$tipo,$password);

			if ($res){
				if($_SESSION['tipo']=="admin"){
					redirect('c_administrarusu');
				}else{
					redirect('c_principal');
				}
			}else{
				echo "no actualizado";
			}
    }
    
    public function nuevousuario()
	{
		
		$this->form_validation->set_rules('nombres','Nombres','required');
		$this->form_validation->set_rules('apellidos','Apellidos','required');
		$this->form_validation->set_rules('correo_electronico','Correo Electronico','required|valid_email|is_unique[usuarios.correo_electronico]');
		$this->form_validation->set_rules('celular','Celular','required|numeric');
		$this->form_validation->set_rules('estatura','Estatura','required|numeric');
		$this->form_validation->set_rules('login','Login','required|is_unique[usuarios.login]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirmar_password','Confirmar Password','required|matches[password]');

		if($this->form_validation->run()==false){
			$this->load->view('v_administrarusu');
		}
		else{
			$nombres =$this->input->post("nombres");
			$apellidos =$this->input->post("apellidos");
			$correo_electronico =$this->input->post("correo_electronico");
			$celular =$this->input->post("celular");
			$estatura =$this->input->post("estatura");
			$login =$this->input->post("login");
			$tipo="usuario";
			$password =$this->input->post("password");

			$this->load->model('m_administrarusu');

			$res = $this->m_administrarusu->insertar_usuario($nombres,$apellidos,$correo_electronico,$celular,$estatura,$login,$tipo,$password);

			if ($res){
				redirect('c_administrarusu');

 
			}else{
				echo "no guardado";
			}
			
		}
		/*echo base_url();
		echo '<br>';
		echo  site_url('home');*/
        
	}

}

/* End of file C_administrarusu.php */
