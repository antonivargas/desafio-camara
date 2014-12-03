<?php $this->load->view("include/adm_header.php"); ?>

<?php $this->load->view("include/menu_admin.php"); ?>

<div class="panel panel-default">
      <div class="panel-heading">

      	<blockquote>
      		<p>Selecione o arquivo desejado e clique em enviar para carregar a base dados.</p>
		</blockquote>

      </div>
      <div class="panel-body">
        <?php 

			echo form_open('admin/atualizando');

			echo "<input name='arquivo' type='file' />";

			$botao= array('type'=>'submit', 'class'=>'btn', 'value'=>'Enviar');
			echo "<br />";
			echo form_submit($botao);
			echo form_close();

		?>
      </div>
</div>




<?php $this->load->view("include/adm_footer.php"); ?>