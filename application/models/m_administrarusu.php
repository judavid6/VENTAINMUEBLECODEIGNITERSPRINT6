<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_administrarusu extends CI_Model {

    public function listUsuario(){
       $query = $this->db->query("SELECT * FROM usuarios");
       return $query->result();
    }
    public function deleteUsuario($id){
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuarios');
    }
    
    public function editUsuario($id){
        $sql="SELECT * FROM usuarios WHERE id_usuario=?";
      $query= $this->db->query($sql,array($id));
      return $query->row_array();
    } 
    public function actualizar($id_usuario,$nombres,$apellidos,$correo_electronico,$celular,$estatura,$login,$tipo,$password)
    {       
      $data=[
        'id_usuario' =>$id_usuario,
        'nombres'=>$nombres,
        'apellidos'=>$apellidos,
        'correo_electronico'=>$correo_electronico,
        'celular'=>$celular,
        'estatura'=>$estatura,
        'login'=>$login,
        'tipo'=>$tipo,
        'password'=>base64_encode($password),
        
        

    ];
      $this->db->where('id_usuario', $id_usuario);
      return $this->db->update('usuarios', $data);
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
    

}

/* End of file M_administrarusu.php */
