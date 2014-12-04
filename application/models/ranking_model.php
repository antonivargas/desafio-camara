<?php
class Ranking_model extends CI_Model {
    
    
    public function listarRanking(){

        $retorno = $this->db->query('SELECT sum(nota) total_nota, avaliacao.id_proposicao,proposicao.id_db,proposicao.nome_autor,proposicao.sigla_uf,proposicao.sigla_partido FROM avaliacao INNER JOIN proposicao ON proposicao.id_db = id_proposicao
            group by id_proposicao');
        //var_dump($retorno->result());exit();
        return $retorno->result();
    }

    

}

?>