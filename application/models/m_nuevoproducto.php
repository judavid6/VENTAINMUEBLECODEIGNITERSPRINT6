<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_nuevoproducto extends CI_Model {

    public function insertar_producto($id_usuario,$titulo_pro,$caracteristicas_pro,$precio_pro,$descripcion_pro,$ubicacion_pro,$estado_pro,$archivo)
    {
        $data=[
            'id_producto' =>" ",  
            'id_usuario'=>$id_usuario,          
            'titulo_pro'=>$titulo_pro,
            'caracteristicas_pro'=>$caracteristicas_pro,
            'precio_pro'=>$precio_pro,
            'descripcion_pro'=>$descripcion_pro,
            'ubicacion_pro'=>$ubicacion_pro,
            'estado_pro'=>$estado_pro,
            'archivo'=>$archivo,
           

        ];

       return  $this->db->insert('productos',$data);
       
    }


}

/* End of file M_nuevoproducto.php */
