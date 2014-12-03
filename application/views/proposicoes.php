<?php $this->load->view("include/header.php"); ?>
<div class="container">
			<!-- Top Navigation -->			
			<header class="codrops-header">				
				<nav class="codrops-demos">
					<a href="<?php echo site_url(); ?>">Home</a>
					<a href="<?php echo site_url('funcionamento'); ?>">Como Funciona</a>		
					<a href="<?php echo site_url('ranking'); ?>">Ranking</a>					
					<a href="<?php echo site_url('termos'); ?>">Termos de Uso</a>
					<a class="current-demo" href="<?php echo site_url('proposicoes'); ?>">Proposições</a>
					<?php if($this->session->userdata('logado') == true && $this->session->userdata('tipo') == 'A') { ?>										
					<a href="<?php echo site_url('admin'); ?>">Admin</a>
					<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
					<?php }else{?>
					<?php if($this->session->userdata('logado') == true){ ?>					
					<a href="<?php echo site_url('login/logout'); ?>">Logout</a>				
					<?php }} ?>
				</nav><br />
				<h1>Como Vai a Câmara?</h1><br />
				<p>Conheça as propostas de lei que estão tramitando no congresso nacional</p>
			</header>
			<section>
				<p>Se estiver com dúvida sobre o funcionamento de uma olhadinha na página <a href="<?php echo site_url('funcionamento'); ?>">como funciona</a></p>
				<!--<div class="mockup-content">-->
					<?php  
							
							srand((float)microtime()*1000000);
							shuffle($proposicoes);

							foreach ($proposicoes as $proposicao) {

								if($this->session->userdata('logado') == true){
					?>
								<div id='avaliar'>
									<?php echo form_open('proposicoes/avaliar'); ?>
										<h3>Avalie esta proposição com uma nota entre 1 e 5</h3>
									    <input type="hidden" name="idproposicao" value="<?php echo $proposicao->id_db; ?>" />
										<input type="radio" name="nota" value="1" /><label> 1 </label>
										<input type="radio" name="nota" value="2" /><label> 2 </label>
										<input type="radio" name="nota" value="3" /><label> 3 </label>
										<input type="radio" name="nota" value="4" /><label> 4 </label>
										<input type="radio" name="nota" value="5" /><label> 5 </label>
										<?php $avaliar= array('type'=>'submit', 'class'=>'btn', 'value'=>'Avaliar'); ?>
										<p><?php echo form_submit($avaliar);?></p>
									<?php echo form_close(); ?>			
								</div>
						<?php 
								}								 
								
								echo"
								<p><strong>Nome da Proposição: </strong>".$proposicao->id_db."<p/>
								<p><strong>Nome da Proposição: </strong>".$proposicao->nome."<p/>
								<p>ID da Proposição de Lei: ".$proposicao->id."<p/>
								<p>ID do Tipo da Proposição: ".$proposicao->id_tipo_proposicao."<p/>
								<p>Sigla da Proposição: ".$proposicao->sigla."<p/>
								<p>Número da Proposição: </strong>".$proposicao->numero."<p/>
								<p>Ano da Proposição: ".$proposicao->ano."<p/>
								<p>ID do Orgao Numerador: ".$proposicao->id_orgao_num."<p/>
								<p>Data de Apresentação: ".$proposicao->data_apresentacao."<p/>
								<p>Texto da Ementa da Proposição: ".$proposicao->txt_ementa."<p/>
								<p>Explicação da Ementa da Proposição: ".$proposicao->explicacao_ementa."<p/>
								<p>Código do Regime: ".$proposicao->cod_regime."<p/>
								<p>Texto Regime: ".$proposicao->txt_regime."<p/>
								<p>ID Apreciação: ".$proposicao->id_apreciacao."<p/>
								<p>Texto da Apreciação: ".$proposicao->txt_apreciacao."<p/>
								<p>Estado do Autor da Proposição: ".$proposicao->sigla_uf."<p/>
								<p>Data do Despacho: ".$proposicao->data_despacho."<p/>
								<p>Texto do Despacho: ".$proposicao->txt_despacho."<p/>
								<p>Situação da Descrição: ".$proposicao->situacao_desc."<p/>
								<p>Código do Orgão do Estado: ".$proposicao->cod_orgao_estado."<p/>
								<p>Sigla do Orgão do Estado: ".$proposicao->sigla_orgao_estado."<p/>
								<p>Código da Proposição Principal: ".$proposicao->cod_proposicao_principal."<p/>
								<p>Proposição Principal: ".$proposicao->proposicao_principal."<p/><br />								
								<hr></hr>

								";
							} 
						?>
					
				<!--</div> /form-mockup -->
			</section>			
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>