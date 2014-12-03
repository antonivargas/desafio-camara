<?php
class Login_model extends CI_Model {

    public function verifica($email = '', $pass = '') {
        if (!$email && !$pass) {
            return false;
        } else 
        {	           
            $res = $this->db->query('SELECT usuarios.id,nome,email,senha,tipo FROM usuarios WHERE usuarios.email="'.$email.'" and usuarios.senha="'.md5($pass).'"');                       
            if ($res->num_rows() == 1) 
            {
                return $res->result();
            } else 
            {
                return false;
            }
        }
    }

    public function ehLogado()
    {
        if ($this->session->userdata('logado') !== true) 
        {
            redirect(site_url('login'));
        }
    }
    

}

?>
