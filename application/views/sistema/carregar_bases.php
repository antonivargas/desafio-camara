<?php $this->load->view("include/adm_header.php"); ?>

<?php $this->load->view("include/menu_admin.php"); ?>

<div class="panel panel-default">
      <div class="panel-heading">

      	<blockquote>
      		<p>Selecione o arquivo desejado e clique em enviar para carregar a base dados.</p>
		</blockquote>

      </div>
      <div class="panel-body">
      <p>Para obter nossas bases de dados, insira os parâmetros Ano, datApresentacaoIni e datApresentacaoFim no seguinte link:<br />
      <em>http://www.camara.gov.br/SitCamaraWS/Proposicoes.asmx/ListarProposicoes?sigla=PL&numero=&<strong>ano=2010</strong>&<strong>datApresentacaoIni=01/01/2010</strong>&<strong>datApresentacaoFim=31/12/2010</strong>&parteNomeAutor=&idTipoAutor=&siglaPartidoAutor=&siglaUFAutor=&genero<br />Autor=&codEstado=&codOrgaoEstado=&emTramitacao=</em></p>
        <?php 

			echo form_open('');

			echo "<input name='arquivo' type='file' />";

			$botao= array('type'=>'submit', 'class'=>'btn', 'value'=>'Enviar');
			echo "<br />";
			echo form_submit($botao);
			echo form_close();

		?>
      </div>
</div>




<?php $this->load->view("include/adm_footer.php"); ?>