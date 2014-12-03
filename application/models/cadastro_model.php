<?php

class Cadastro_model extends CI_Model {

    public function usuario($usuario){
        
        //var_dump($usuario);exit();
        return $this->db->insert('usuarios', $usuario);
    }  

    public function listUsers(){
    	$retorno = $this->db->get('usuarios');        
        return $retorno->result();
    } 
    

}

?>																																																																								