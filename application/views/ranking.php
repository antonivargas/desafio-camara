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
									<p>Pea horseradish azuki bean lettuce avocado asparagus okra. Kohlrabi radish okra azuki bean corn fava bean mustard tigernut juccama green bean celtuce collard greens avocado quandong <strong>fennel gumbo</strong> black-eyed pea. Grape silver beet watercress potato tigernut corn groundnut. Chickweed okra pea winter purslane coriander yarrow sweet pepper radish garlic brussels sprout groundnut summer purslane earthnut pea <strong>tomato spring onion</strong> azuki bean gourd.</p>
									<p><input id="terms" type="checkbox" /><label for="terms">Eu aceito os termos &amp; condições.</label></p>
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