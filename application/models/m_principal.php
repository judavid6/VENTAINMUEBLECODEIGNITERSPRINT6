<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_principal extends CI_Model {

    
    public function getPost(){

        return $this->db->get('estudiantes', 'ASC');

    }
    
    
    public function buscar($identificador)
    {
      $sql="SELECT * FROM productos WHERE id_producto=?";
      $query= $this->db->query($sql,array($identificador));
      return $query->row_array();
       
    }
    public function actualizar($id_producto,$titulo_pro,$caracteristicas_pro,$precio_pro,$descripcion_pro,$archivo)
    {

       
      $data=[
        'id_producto' =>$id_producto,
        
        'titulo_pro'=>$titulo_pro,
        'caracteristicas_pro'=>$caracteristicas_pro,
        'precio_pro'=>$precio_pro,
        'descripcion_pro'=>$descripcion_pro,
        'archivo'=>$archivo,
        
        
        

    ];
      $this->db->where('id_producto', $id_producto);
      return $this->db->update('productos', $data);
    }

    
    public function insertar_usuario($nombres,$apellidos,$correo_electronico,$celular,$estatura,$login,$tipo,$password)
    {
        $data=[
            'id_usuario' =>" ",
            'nombres'=>$nombres,
            'apellidos'=>$apellidos,
            'correo_electronico'=>$correo_electronico,
            'celular'=>$celular,
            'estatura'=>$estatura,
            'login'=>$login,
            'tipo'=>$tipo,
            'password'=>base64_encode($password)

        ];

       return  $this->db->insert('usuarios',$data);
       
    }

    public function mostrarproducto($identificador){
      
      $sql="SELECT * FROM productos WHERE id_producto=?";
      $query= $this->db->query($sql,array($identificador));
      return $query->row_array();
     
    }

    public function postularse($identificador,$id_producto){
      $data=[
        'id_postulacion' =>" ",
        'id_producto'=>$id_producto,
        'id_usuario'=>$identificador,
        

    ];

   return  $this->db->insert('postulaciones',$data);

    }
}

/* End of file M_principal.php */
