<?php $this->load->view("include/header.php"); ?>
<div class="container">
			<!-- Top Navigation -->			
			<header class="codrops-header">				
				<nav class="codrops-demos">
					<a href="<?php echo site_url(); ?>">Home</a>
					<a href="<?php echo site_url('funcionamento'); ?>">Como Funciona</a>		
					<a class="current-demo" href="<?php echo site_url('ranking'); ?>">Ranking</a>					
					<a href="<?php echo site_url('termos'); ?>">Termos de Uso</a>
					<a href="<?php echo site_url('proposicoes'); ?>">Proposições</a>
					<?php if($this->session->userdata('logado') == true && $this->session->userdata('tipo') == 'A') { ?>										
					<a href="<?php echo site_url('admin'); ?>">Admin</a>
					<a href="<?php echo site_url('login/logout'); ?>">Logout</a>
					<?php }else{?>
					<?php if($this->session->userdata('logado') == true){ ?>					
					<a href="<?php echo site_url('login/logout'); ?>">Logout</a>				
					<?php }} ?>
				</nav><br />
				<h1>Como Vai a Câmara?</h1><br />
				<p>Você avaliou alguma proposição de lei do seu interesse por aqui?</p>
			</header>
			<section>
				<p>Confira quem são os autores das proposições que obtiveram as melhores avaliações:</p>
				<div class="mockup-content">
					
					<div id="ranking">
					<center><p><h3>Ranking de Parlamentares</h3></p></center>
					
							<table id="example" class="display" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Nome</th>
											<th>Estado</th>
											<th>Partido</th>
											<th>Pontos de Avaliações</th>																						
										</tr>
									</thead>
							 
									<tfoot>
										<tr>
											<th>Nome</th>
											<th>Estado</th>
											<th>Partido</th>
											<th>Pontos em Avaliacões</th>											
										</tr>
									</tfoot>
									<tbody>																					
											<?php
													foreach($ranking as $rank){
														echo "<tr>";
														echo "<td>".$rank->nome_autor."</td>";														
											     	    echo "<td>".$rank->sigla_uf."</td>";
											     	    echo "<td>".$rank->sigla_partido."</td>";														
														echo "<td>".$rank->total_nota."</td>";														 
														echo "</tr>";														   
													}
												?>							
											
								    </tbody>
							</table>
					
				</div>	
					
				</div><!-- /form-mockup -->
			</section>			
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>