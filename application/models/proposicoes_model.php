<?php
class Proposicoes_model extends CI_Model {
    
    public function atualizar($id,$nome,$idTipoProposicao,$sigla,$numero, $ano, $idOrgaoNum,$siglaOrgaoNum,
    	$dataApresentacao,$txtEmenta,$ExplicacaoEmta,$codRegime,$txtRegime,$idApreciacao,$txtApreciacao,
    	$nomeAutor,$ideCadastro,$codPartido,$siglaPartido,$siglaUF,$qtdAutores,$datDespacho,$txtDespacho,
    	$idSituacao,$situacaoDesc,$codOrgaoEstado,$siglaOrgaoEstado,$codProposicaoPrincipal,
    	$proposicaoPrincipal,$indGenero,$qtdOrgaosComEstado){

        $proposicao['id'] = $id;     
        $proposicao['nome'] = $nome ;
        $proposicao['id_tipo_proposicao'] = $idTipoProposicao; 
        $proposicao['sigla'] = $sigla; 
        $proposicao['numero'] = $numero;
        $proposicao['ano'] = $ano; 
        $proposicao['id_orgao_num'] = $idOrgaoNum; 
        $proposicao['sigla_orgao_num'] = $siglaOrgaoNum; 
        $proposicao['data_apresentacao'] = $dataApresentacao; 
        $proposicao['txt_ementa'] = $txtEmenta; 
        $proposicao['explicacao_ementa'] = $ExplicacaoEmta; 
        $proposicao['cod_regime'] = $codRegime; 
        $proposicao['txt_regime'] = $txtRegime; 
        $proposicao['id_apreciacao'] = $idApreciacao; 
        $proposicao['txt_apreciacao'] = $txtApreciacao; 
        $proposicao['nome_autor'] = $nomeAutor; 
        $proposicao['id_cadastro'] = $ideCadastro; 
        $proposicao['cod_partido'] = $ideCadastro;
        $proposicao['sigla_partido'] = $siglaPartido; 
        $proposicao['sigla_uf'] = $siglaUF;
        $proposicao['qtd_autores'] = $qtdAutores;
        $proposicao['data_despacho'] = $datDespacho;
        $proposicao['txt_despacho'] = $txtDespacho;
        $proposicao['id_situacao'] = $idSituacao;
        $proposicao['situacao_desc'] = $situacaoDesc;
        $proposicao['cod_orgao_estado'] = $codOrgaoEstado;
        $proposicao['cod_proposicao_principal'] = $codProposicaoPrincipal;
        $proposicao['proposicao_principal'] = $proposicaoPrincipal;
        $proposicao['ind_genero'] = $indGenero;
        $proposicao['qtd_orgaos_com_estado'] = $qtdOrgaosComEstado;
        
        return $this->db->insert('proposicao', $proposicao);
    }

    function somarTodas()
    {
        return $this->db->count_all('proposicao');    
    }


    public function proposicoes(/*$_limit = 1000, $_start = 0*/){

        //$this->db->limit( $_limit, $_start );         
        $retorno = $this->db->get('proposicao');        
        return $retorno->result();
    }

    public function avaliar($avaliacao){

        return @$this->db->insert('avaliacao', $avaliacao);
        //return $retorno->result();
    }


}
?>