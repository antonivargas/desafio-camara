<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ranking extends CI_Controller {

	public function index(){

		$this->load->model('ranking_model');
		$dados['ranking'] = $this->ranking_model->listarRanking();
		//var_dump($dados['ranking']);exit();
        $this->load->view('ranking',$dados);
	}

	 
}