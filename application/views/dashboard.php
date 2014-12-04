<?php $this->load->view("include/adm_header.php"); ?>

<?php //foreach ($graficouser as $somauser){ $soma = $somauser->id_user;} echo $soma;?>

<?php $this->load->view("include/menu_admin.php"); ?>     



      <div class="panel panel-default">
      <!-- Default panel contents -->
      	<div class="panel-heading"><center><h1><small>Dashboard</small></h1></center></div>
        <div class="panel-body">

        	<div class="row">
		        <div class="col-md-3">

		       		<div class="panel panel-primary">
				      <div class="panel-heading">
				      	<h3 class="panel-title">Usuários cadastrados</h3>
				      </div>
				      <div class="panel-body">
				      	<center>
					      	<h1><small>
					      		<p><b class="timer" data-to="<?php echo $total_proposicoes; ?>" data-speed="1000"><?php echo $total_usuarios; ?></b></p>
					      	</small></h1>
				      	</center> 				      
				      </div>
				    </div>

		       </div>
		       <div class="col-md-3">

		       		<div class="panel panel-primary">
				      <div class="panel-heading">
				      	<h3 class="panel-title">Usuários Bloqueados</h3>
				      </div>
				      <div class="panel-body">
				        <center>
				        	<h1><small>
				        		<?php foreach ($usuarios_bloqueados as $usuarios_bloq) { $userBloq = $usuarios_bloq->id;} ?>
				        		<p><b class="timer" data-to="<?php echo $userBloq; ?>" data-speed="1000"><?php echo $userBloq; ?></b></p>
				        	</small></h1>
				        </center>
				      </div>
				    </div>

		       </div>
		       <div class="col-md-3">

		       		<div class="panel panel-primary">
				      <div class="panel-heading">
				      	<h3 class="panel-title">Proposições cadastradas</h3>
				      </div>
				      <div class="panel-body">
				      	<center>
				      	<h1><small>
				      		<p><b class="timer" data-to="<?php echo $total_proposicoes; ?>" data-speed="1000"><?php echo $total_proposicoes; ?></b></p>
				      	</small></h1>
				      	</center>
				      </div>
				    </div>

		        </div>
		        <div class="col-md-3">

		       		<div class="panel panel-primary">
				      <div class="panel-heading">
				      	<h3 class="panel-title">Parlamentares cadastrados</h3>
				      </div>
				      <div class="panel-body">
				      	<?php foreach ($total_parlamentares as $parlamentares) {	$total = $parlamentares->nome_autor;} ?>
				        <center><h1><small><p><b class="timer" data-to="<?php echo $total; ?>" data-speed="1000"><?php echo $total; ?></b></p></small></h1></center>
				      </div>
				    </div>

		        </div>		       
		       
		    </div>

        	<div class="row">
		      	<div class="col-md-6">

			      	<div class="panel panel-primary">
				      <div class="panel-heading">
				      <h3 class="panel-title">Gráfico de participação de usuários</h3>
				      </div>
				      <div class="panel-body">
				        <div id="chartdiv1" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
				      </div>
				    </div>
		      		

		      	</div>

		      	<div class="col-md-6">

		      		<div class="panel panel-primary">
				      <div class="panel-heading">
				      <h3 class="panel-title">Gráfico de proposições avaliadas</h3>
				      </div>
				      <div class="panel-body">
				        <div id="chartdiv2" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
				      </div>
				    </div>


		      	</div>

		      		     
		    </div>

        	         

        </div>
      </div> 
    

  </div>

<?php $this->load->view("include/adm_footer.php"); ?>