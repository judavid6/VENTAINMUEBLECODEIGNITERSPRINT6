<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_verinmuebles extends CI_Model {

    public function buscar($identificador)
    {
      $sql="SELECT * FROM productos WHERE id_producto=?";
      $query= $this->db->query($sql,array($identificador));
      return $query->row_array();
       
    }public function buscarfotos($identificador)
    {
      $sql="SELECT * FROM gallery WHERE id_producto=?";
      $query= $this->db->query($sql,array($identificador));
      return $query->row_array();
       
    }
    public function buscarpostulantes($id)
    {
      $sql="SELECT usuarios.nombres FROM usuarios INNER JOIN postulaciones ON postulaciones.id_usuario=usuarios.id_usuario AND postulaciones.id_producto=?";
      $query= $this->db->query($sql,array($id));
      return $query->row_array();
       
    }

}

/* End of file M_verinmuebles.php */
