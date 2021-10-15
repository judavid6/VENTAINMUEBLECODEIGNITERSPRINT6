<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_principal extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
	
		
	}
	

	public function index()
	{
        $result =$this->db->query("SELECT * FROM productos  ORDER BY id_producto DESC");
		$data = array('consulta'=>$result);
		$identificador=$this->input->post('id');
		$this->load->model('m_principal');
		$data["info"]=$this->m_principal->buscar($identificador);
	
		$this->load->view('v_principal',$data);
	}

	public function editar_producto()
    {
		if($this->input->post('editar')){
			$identificador=$this->input->post('id');
        	$this->load->model('m_principal');
        	$info["info"]=$this->m_principal->buscar($identificador);
        
			$this->load->view('v_modificar',$info);
		}
		
		if($this->input->post('postularse')){
			if(!$this->session->userdata('login')){
				redirect('c_login');
				
			}
			else{
				$identificador=$this->input->post('id');
				
		$result =$this->db->query("SELECT * FROM productos  WHERE id_producto = $identificador");
		$data = array('consulta'=>$result);
		
		$this->load->model('m_verinmuebles');
		$data["info"]=$this->m_verinmuebles->buscar($identificador);
		$this->load->view('v_vermas', $data);
			}
			
		}
        
		
		
    }
    public function actualizar_producto()
    {
		$config["upload_path"]="./archivos";
        $config["allowed_types"]="jpg|png|jpeg";
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('archivo')){
			
			$resultado=$this->input->post('archivo2');
			
        }
        else{
			echo "archivo_cargado";
			$archivo=$this->upload->data('file_name');
        }	
            $id_producto=$this->input->post('id_producto');
            
            $titulo_pro =$this->input->post("titulo_pro");
			$caracteristicas_pro =$this->input->post("caracteristicas_pro");
			$precio_pro =$this->input->post("precio_pro");
			$descripcion_pro=$this->input->post("descripcion_pro");
			$this->load->model('m_principal');
			if(! $this->upload->do_upload('archivo')){
				$res = $this->m_principal->actualizar($id_producto,$titulo_pro,$caracteristicas_pro,$precio_pro,$descripcion_pro,$resultado);
			}else{
				$res = $this->m_principal->actualizar($id_producto,$titulo_pro,$caracteristicas_pro,$precio_pro,$descripcion_pro,$archivo);
			}
			

			if ($res){
                echo 'actualizado correctamente';
				if($_SESSION['tipo']=="admin"){
					redirect('c_administrarproduc');
				}else{
					redirect('c_principal');
				}
                
			}else{
				echo "no actualizado";
			}
	}
	public function nuevo_usuario()
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
			$this->load->view('v_nuevousuario');
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

			$this->load->model('m_principal');

			$res = $this->m_principal->insertar_usuario($nombres,$apellidos,$correo_electronico,$celular,$estatura,$login,$tipo,$password);

			if ($res){
				redirect('c_login');

 
			}else{
				echo "no guardado";
			}
			
		}
		/*echo base_url();
		echo '<br>';
		echo  site_url('home');*/
        
	}
	public function postularse($id_producto = NULL)
	{

		if($this->input->post('postularse')){
			if($id_producto != NULL && $_SESSION['id']!=NULL){
			
			$identificador=$_SESSION['id'];
       		 $this->load->model('m_principal');
        	$res =$this->m_principal->postularse($identificador,$id_producto);
			if ($res){				
				
		
				$data['param1'] = 1;
				$this->load->view('jspush.php',$data); 
					
					
			          
			}
			else{				
				echo "no se pudo";			
			}			
		   }
		}else{
			
			redirect('c_principal','refresh');
			
		}
				
	}


	

}
