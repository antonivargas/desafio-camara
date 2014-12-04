<div class="container-fluid">

<nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo site_url('admin'); ?>">Ádministração</a>
        </div>

       <!--  Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">            
            </li>
            <li class="active"><a href="<?php echo site_url('admin');?>">Dashboard</a></li>  
            <li><a href="<?php echo site_url('admin/usuarios');?>">Usuários</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sistema<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">               
                <li><a href="<?php echo site_url('admin/atualizar_proposicoes'); ?>">Atualizar Proposições</a></li>
                <li class="divider"></li>
                <li><a href="<?php echo site_url('admin/carregar_bases'); ?>">Carregar bases de dados</a></li>
              </ul>
            </li> 
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Estatísticas <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">               
                <li><a href="#">Avaliações</a></li>
                <li class="divider"></li>
                <li><a href="#">Parlamentares</a></li>
              </ul>                      
          </ul>


          <?php if($this->session->userdata('logado') == true){ ?>

					<ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url();?>">Web Site</a></li>
			          <li><a href="<?php echo site_url('login/logout'); ?>">Logout</a></li>           
			        </ul>									
		  <?php } ?>     
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /.nav-bar -->