<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function usuario(){         

        $nome = $this->input->post('nome');
        $email = $this->input->post('email');
        $senha = $this->input->post('senha');
        $termos = $this->input->post('terms');
        if($termos == "sim"){          
        

            //var_dump($nome,$email,$senha);exit();              
                
            if ($nome != null && $email != null  && $senha != null){ 

                //var_dump($nome,$email,$senha);exit();
                $usuario['nome'] = $nome;
                $usuario['email'] = $email;
                $usuario['senha'] = md5($senha);                                      

                $this->load->model('cadastro_model'); 
                $retorno = $this->cadastro_model->usuario($usuario);

                if(isset($retorno)){
                    //var_dump('Okay');exit();                    
                    redirect(site_url('comece'));
                }
            } 

        }            
    }

    
}