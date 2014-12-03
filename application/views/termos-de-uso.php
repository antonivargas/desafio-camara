<?php $this->load->view("include/header.php"); ?>
<div class="container">
			<!-- Top Navigation -->			
			<header class="codrops-header">				
				<nav class="codrops-demos">
					<a href="<?php echo site_url(); ?>">Home</a>
					<a href="<?php echo site_url('funcionamento'); ?>">Como Funciona</a>	
					<a href="<?php echo site_url('ranking'); ?>">Ranking</a>					
					<a class="current-demo" href="<?php echo site_url('termos'); ?>">Termos de Uso</a>
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
				<p>Confira os termos e condições de uso para esta <strong>aplicação</strong>:</p>
				<div class="mockup-content">
					<span></span><span></span><span></span><span></span>
					<div class="morph-button morph-button-modal morph-button-modal-1 morph-button-fixed">
						<button type="button">Termos &amp; Condições de Uso</button>
						<div class="morph-content">
							<div>
								<div class="content-style-text">
									<span class="icon icon-close">Close the dialog</span>
									<h2>Termos &amp; Condições de uso</h2>
									<p>Ao criar uma conta nesta aplicação automáticamente o usuário concorda com os termos e condições de uso do 
									web site, o usuário deverá estar ciente de que as informações divulgadas neste web site, não tem cunho político
									e não devem ser utilizadas em prol nenhum tipo de trabalho ou movimento de cunho político, os administradores do web 
									site se reservam o direito de bloquear o acesso de qualquer usuário sem aviso prévio se assim julgar necessário, também
									os usuários deverão estar cientes que ao se cadastrar declaram estar de acordo come stas condições. As informações
									aqui publicadas são de origem governametal, e podem ser acessadas através das API de dados do site da cãmara federal
									<strong>http://www2.camara.leg.br</strong> 
									para mais informações ou contribuições com o projeto entre em contato através do email <strong>
									antonivargas@gmail.com</strong> .</p>
									
								</div>
							</div>
						</div>
					</div><!-- morph-button -->
					<span></span>
					<span></span>
					
				</div><!-- /form-mockup -->
			</section>			
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>