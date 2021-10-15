<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_nuevoproducto extends CI_Controller {


public function __construct()
{
    parent::__construct();
    if(!$this->session->userdata('login')){
        redirect('c_principal');
        
    }
    $this->load->model('m_nuevoproducto');
}


    public function index()
    {
		$this->load->view('v_nuevoproducto');
		
        
    }
    public function nuevo_producto()
	{	
        
        
            
        
        
          	
		$this->form_validation->set_rules('titulo_pro','Titulo','required');
		$this->form_validation->set_rules('caracteristicas_pro','Caracteristicas','required');
		$this->form_validation->set_rules('precio_pro','Precio','required|numeric');
		$this->form_validation->set_rules('descripcion_pro','Descripcion','required');
		$this->form_validation->set_rules('ubicacion_pro','Ubicacion','required');
		if (empty($_FILES['archivo']))
{
    $this->form_validation->set_rules('archivo', 'Archivo', 'required');
}
		

		if($this->form_validation->run()==false){
			$this->load->view('v_nuevoproducto');
		}
		else{	
		$config["upload_path"]="./archivos";
        $config["allowed_types"]="jpg|png|jpeg";
        $this->load->library('upload',$config);
        if(! $this->upload->do_upload('archivo')){
            echo $this->upload->display_errors();
			echo $config["upload_path"];
			
        }
        else{
			echo "archivo_cargado";
			$archivo=$this->upload->data('file_name');
        }		
			$titulo_pro =$this->input->post("titulo_pro");
			$caracteristicas_pro =$this->input->post("caracteristicas_pro");
			$precio_pro =$this->input->post("precio_pro");
			$descripcion_pro =$this->input->post("descripcion_pro");
			$ubicacion_pro=$this->input->post("ubicacion_pro");
			$estado_pro="en venta";
			

			$this->load->model('m_nuevoproducto');
			$id_usuario= $_SESSION['id'];


			$res = $this->m_nuevoproducto->insertar_producto($id_usuario,$titulo_pro,$caracteristicas_pro,$precio_pro,$descripcion_pro,$ubicacion_pro,$estado_pro,$archivo);

			if ($res){
				echo 'guardado';
               
                redirect('c_principal');
			}else{
				echo "no guardado";
			}
			
		}
		/*echo base_url();
		echo '<br>';
		echo  site_url('home');*/
        
	}


}

/* End of file Controllername.php */
