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

     public function desbloqueio($id,$bloqueado){
    	//var_dump($id,$bloqueado);exit();    	
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $bloqueado);
        //return $retorno->result();
    
    } 

    public function bloqueio($id,$bloqueado){
    	//var_dump($id,$bloqueado);exit();
    	$this->db->where('id', $id);
        return $this->db->update('usuarios', $bloqueado);
        //return $retorno->result();
    }    
    

}

?>																																																																								