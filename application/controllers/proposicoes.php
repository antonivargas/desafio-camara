<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Proposicoes extends CI_Controller {

	public function index(){			                
            //var_dump('oi');exit();
			$this->load->model('proposicoes_model');
            $var['proposicoes'] = $this->proposicoes_model->proposicoes();
            //var_dump($var['proposicoes']);exit();                        
            $this->load->view('proposicoes',$var);
	}

	
	public function avaliar(){

		$idprop = $this->input->post('idproposicao');
        $user = $this->session->userdata('id');
        $nota = $this->input->post('nota');        
        //var_dump($idprop,$nota,$user);exit();
        
        if ($idprop != null && $user != null  && $nota != null){ 

            //var_dump($nome,$email,$senha);exit();
            $avaliacao['id_proposicao'] = $idprop;
            $avaliacao['id_user'] = $user;
            $avaliacao['nota'] = $nota;                                      

            $this->load->model('proposicoes_model'); 
            $retorno = $this->proposicoes_model->avaliar($avaliacao);

            if(isset($retorno) && $retorno == true){
                //var_dump('Okay');exit();                    
                redirect(site_url('proposicoes'));
            }
        } 
    } 
}

	 


