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
				<p>Este web site é um projeto acadêmico criado com o objetivo de levar informações públicas das atividades parlamentares no congresso nacional, até pessoas
				comuns, provendo informação de maneira mais clara e objetiva, você poderá navegar por uma lista de propostas de leis, criadas pelos deputados e senadores federais
				da república, de maneira bem simples verificando as informações mais básicas e importantes para saber do que se trata cada proposta, de maneira bem simples e interativa
				você poderá também avaliar sob seu entendimento o quão interessante são as propostas que você vier a conhecer através de nosso web site, desta forma terá acesso também
				a um ranking com a pontução dos parlamentares obtida pela somatória das avaliações das propostas aqui no site. Para que você consiga avaliar as propostas é necessário
				que você possua uma conta no site, e esteja logado, lembrando que para se cadastrar somente será possível se o usuário concordar com nossos termos de uso do site.</p>

				
				<div class="mockup-content">
					<p>Todas as informações apresentadas neste site são retiradas da API de dados abertos da camara federal do congresso nacional e podem ser acessadas no site oficial através do seguinte link: <a target="blank" href="http://www2.camara.leg.br/">http://www2.camara.leg.br/</a></p>
				</div><!-- /form-mockup -->
			</section>			
		</div><!-- /container -->
<?php $this->load->view("include/footer.php"); ?>