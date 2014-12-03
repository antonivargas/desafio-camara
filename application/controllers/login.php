<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function logar() {
        $email = $this->input->post('email');
        $pass = $this->input->post('pass');

        //var_dump($email,$pass);exit;
        
        if ($email && $pass) {
            $this->load->model('login_model');
            $verifica = $this->login_model->verifica($email, $pass);
            //var_dump($verifica);exit;

            if ($verifica[0]) {                
                $this->session->set_userdata('id', $verifica[0]->id);
                $this->session->set_userdata('nome', $verifica[0]->nome);
                $this->session->set_userdata('email', $verifica[0]->email);
                $this->session->set_userdata('tipo', $verifica[0]->tipo);                
                $this->session->set_userdata('logado', true);                
                redirect(site_url());
            } else {
                $msg = 'Usuário ou senha não conferem';
                $this->load->view('login_view',$msg);
            }
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect(site_url());
    }

    

}