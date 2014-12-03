<?php $this->load->view("include/header.php"); ?>
<div class="container">
			<!-- Top Navigation -->			
			<header class="codrops-header">				
				<nav class="codrops-demos">
					<a class="current-demo" href="<?php echo site_url(); ?>">Home</a>
					<a href="<?php echo site_url('funcionamento'); ?>">Como Funciona</a>		
					<a href="<?php echo site_url('ranking'); ?>">Ranking</a>					
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
				<p>Você conhece as propostas do deputado ou senador que você votou nas últimas eleições?</p>		
			</header>		
			
			<?php if($this->session->userdata('logado') == false){ ?>
			<section>
				
				<p><?php echo"Agora você já está cadastrado! faça seu login começar"; ?>:</p>

				
				<div class="mockup-content">
					<p>Nota! Somente será pssível se cadastrar concordando com os termos de uso do site.</p>					
					<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button">Login</button>
						<div class="morph-content">						
							<div>
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Fechar Janela</span>
									<h2>Login</h2>
									<?php echo form_open('login/logar');?>
										<p><label>Email</label><input name="email" type="text" /></p>
										<p><label>Senha</label><input name="pass" type="password" /></p>
										 <?php $login= array('type'=>'submit', 'class'=>'btn', 'value'=>'Login'); ?>
										<p><?php echo form_submit($login);?></p>
									<?php echo form_close();?>
									
								</div>
							</div>						
						</div>
					</div><!-- morph-button -->										
					<p>Todas as informações apresentadas neste site são retiradas da API de dados abertos da camara federal do congresso nacional e podem ser acessadas no site oficial através do seguinte link: <a target="blank" href="http://www2.camara.leg.br/">http://www2.camara.leg.br/</a></p>
				</div><!-- /form-mockup -->
			</section>
			<?php } ?>	
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>