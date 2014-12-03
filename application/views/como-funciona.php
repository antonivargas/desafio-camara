<?php $this->load->view("include/header.php"); ?>
<div class="container">
			<!-- Top Navigation -->			
			<header class="codrops-header">				
				<nav class="codrops-demos">
					<a href="<?php echo site_url(); ?>">Home</a>
					<a class="current-demo" href="<?php echo site_url('funcionamento'); ?>">Como Funciona</a>	
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
			<section>				
				
				<p>Topa fazer uma experiência? Vamos ver como você avalia as proposições legislativas nas quais nossos parlamentares tem trabalhado no congresso nacional?</p>

				<p>Para começar é muito simples, clique em uma das opções abaixo para <strong>logar ou criar uma conta</strong>:</p>
				<div class="mockup-content">
					<p>Pea horseradish azuki bean lettuce avocado asparagus okra.</p>
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
										 <?php $botao= array('type'=>'submit', 'class'=>'btn', 'value'=>'Login'); ?>
										<p><?php echo form_submit($botao);?></p>
									<?php echo form_close();?>
									
								</div>
							</div>						
						</div>
					</div><!-- morph-button -->
					<strong class="joiner">ou</strong>
					<div class="morph-button morph-button-modal morph-button-modal-3 morph-button-fixed">
						<button type="button">Signup</button>
						<div class="morph-content">
							<div>
								<div class="content-style-form content-style-form-2">
									<span class="icon icon-close">Fechar Janela</span>
									<h2>Sign Up</h2>
									<form>
										<p><label>Email</label><input type="text" /></p>
										<p><label>Senha</label><input type="password" /></p>
										<p><label>Repita a Senha</label><input type="password" /></p><br>
										<p><input id="terms" type="checkbox" /><label for="terms">Eu aceito os termos &amp; condições.</label></p>
										<p><button>Cadastrar</button></p>										
									</form>
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<p>Kohlrabi radish okra azuki bean corn fava bean mustard tigernut juccama green bean celtuce collard greens avocado quandong.</p>
				</div><!-- /form-mockup -->
			</section>			
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>