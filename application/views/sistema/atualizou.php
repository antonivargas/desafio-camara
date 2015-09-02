<?php $this->load->view("include/adm_header.php"); ?>

<?php $this->load->view("include/menu_admin.php"); ?>

<?php if(isset($mensagem) && ($mensagem == 'A base de dados foi atualizada com sucesso')){ ?>
<div class="panel panel-success">
	<div class="panel-heading">
	<h3 class="panel-title">Atualizado!</h3>
	</div>
	<div class="panel-body">
	<?php if($mensagem !== null){ echo $mensagem; } ?>
	</div>
</div>
<?php } else{?>
<div class="panel panel-warning">
	<div class="panel-heading">
	<h3 class="panel-title">Não foi possível atualizar!</h3>
	</div>
	<div class="panel-body">
	<?php if($mensagem !== null){ echo $mensagem; } ?>
	</div>
</div>
<?php } ?>
<?php $this->load->view("include/adm_footer.php"); ?>