<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();

        if ($this->session->userdata('logado') != true && $this->session->userdata('tipo') != 'A'|| $this->session->userdata('logado') == true && $this->session->userdata('tipo') != 'A')
            redirect(site_url());
        $this->load->library('pagination');        
        
    }

	public function index(){            
            $this->load->model('proposicoes_model');
            $infos['total_proposicoes'] = $this->proposicoes_model->somarProposicoes(); 
            $infos['total_usuarios'] = $this->proposicoes_model->somarUsuarios();
            $infos['usuarios_bloqueados'] = $this->proposicoes_model->somarUsuariosBloq();
            $infos['total_parlamentares'] = $this->proposicoes_model->somarParlamentares();           
            //var_dump($infos['usuarios_bloqueados']);exit();
            $this->load->view('dashboard',$infos);
	}

    public function atualizar_proposicoes(){           

            $this->load->view('sistema/atualizar-proposicoes');
    }

    public function usuarios(){  

            $this->load->model('cadastro_model');
            $dados['usuarios'] = $this->cadastro_model->listUsers();
            //var_dump($usuarios);exit();
            $this->load->view('sistema/usuarios',$dados);
    }

    public function carregar_bases(){           

            $this->load->view('sistema/carregar_bases');
    }

    public function atualizando(){

        if($this->input->post()){


            $arquivo = $this->input->post();

            //var_dump($arquivo);exit();

            $link = 'http://localhost/camara/bases/';

            foreach ($arquivo as $arq) {
                $ar=null;
                $ar = $ar.$arq;
            }

            $ler = $link . $ar;
            //var_dump($ler);exit();

            $xml = simplexml_load_file($ler);

            foreach($xml-> proposicao as $prop){
        
                $id     = utf8_decode($prop->id);     
                $nome   = utf8_decode($prop->nome);
                $idTipoProposicao   = utf8_decode($prop->tipoProposicao->id);
                $sigla   = utf8_decode($prop->tipoProposicao->sigla);
                $numero = utf8_decode($prop->numero);
                $ano    = utf8_decode($prop->ano);
                $idOrgaoNum     = utf8_decode($prop->orgaoNumerador->id);
                $siglaOrgaoNum  = utf8_decode($prop->orgaoNumerador->sigla);
                $dataApresentacao   = utf8_decode($prop->datApresentacao);
                $txtEmenta      = utf8_decode($prop->txtEmenta);
                $ExplicacaoEmta = utf8_decode($prop->txtExplicacaoEmenta);
                $codRegime      = utf8_decode($prop->regime->codRegime);
                $txtRegime      = utf8_decode($prop->regime->txtRegime);
                $idApreciacao   = utf8_decode($prop->apreciacao->id);
                $txtApreciacao  = utf8_decode($prop->apreciacao->txtApreciacao);
                $nomeAutor      = utf8_decode($prop->autor1->txtNomeAutor);
                $ideCadastro    = utf8_decode($prop->autor1->ideCadastro);
                $codPartido     = utf8_decode($prop->autor1->codPartido);
                $siglaPartido   = utf8_decode($prop->autor1->txtSiglaPartido);
                $siglaUF        = utf8_decode($prop->autor1->txtSiglaUF);  
                $qtdAutores     = utf8_decode($prop->qtdAutores);
                $datDespacho    = utf8_decode($prop->ultimoDespacho->datDespacho);
                $txtDespacho    = utf8_decode($prop->ultimoDespacho->txtDespacho);
                $idSituacao     = utf8_decode($prop->situacao->id);
                $situacaoDesc   = utf8_decode($prop->situacao->descricao);
                $codOrgaoEstado     = utf8_decode($prop->situacao->orgao->codOrgaoEstado);
                $siglaOrgaoEstado   = utf8_decode($prop->situacao->orgao->siglaOrgaoEstado);
                $codProposicaoPrincipal = utf8_decode($prop->situacao->principal->codProposicaoPrincipal);
                $proposicaoPrincipal    = utf8_decode($prop->situacao->principal->proposicaoPrincipal);   
                $indGenero  = utf8_decode($prop->indGenero);
                $qtdOrgaosComEstado = utf8_decode($prop->qtdOrgaosComEstado);
                $this->load->model('proposicoes_model');
                $retorno['resposta'] = $this->proposicoes_model->atualizar($id,$nome,$idTipoProposicao,$sigla,  
                $numero, $ano, $idOrgaoNum,$siglaOrgaoNum,$dataApresentacao,$txtEmenta,$ExplicacaoEmta,$codRegime,
                $txtRegime,$idApreciacao,$txtApreciacao,$nomeAutor,$ideCadastro,$codPartido,$siglaPartido,$siglaUF,
                $qtdAutores,$datDespacho,$txtDespacho,$idSituacao,$situacaoDesc,$codOrgaoEstado,$siglaOrgaoEstado, 
                $codProposicaoPrincipal,$proposicaoPrincipal,$indGenero,$qtdOrgaosComEstado);               

            }

            if($retorno == true){

                $msg['mensagem'] ='A base de dados foi atualizada com sucesso';
                //var_dump($msg['mensagem']);exit();
            }

                $this->load->view('sistema/atualizou',$msg);
        }


    }

	 
}