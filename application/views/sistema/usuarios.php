<?php $this->load->view("include/users_head.php"); ?>

<?php $this->load->view("include/menu_admin.php"); ?>     
      

      <div class="panel panel-default">
          <div class="panel-heading"><center><h1>Gerenciamento de Usuários</h1></center></div>
          <div class="panel-body">

              
              <!-- <h2><small>Tabela Responsive</small></h2> -->
              <table class="table table-striped">
                <thead>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Último Login</th>
                  <th>Ação</th>                  
                </thead>
                <tbody>
                <?php foreach ($usuarios as $users) { ;?>
                  <tr>
                    <td><?php  echo $users->nome; ?></td>
                    <td><?php  echo $users->email; ?></td>
                    <td><?php  echo $users->last_login; ?></td>
                    <?php echo form_open('cadastro/status'); ?>
                    <th><?php if($users->bloqueado == 'N'){ ?>
                                 <input type="hidden" name="acao" value="<?php  echo $users->bloqueado; ?>" /> 
                                 <input type="hidden" name="iduser" value="<?php  echo $users->id; ?>" />                      
                                 <button type="submit">Bloquear</button>                      
                       <?php  }else{ ?>
                                 <input type="hidden" name="acao" value="<?php  echo $users->bloqueado; ?>" /> 
                                 <input type="hidden" name="iduser" value="<?php  echo $users->id; ?>" />
                                 <button type="submit">Desbloquear</button>
                       <?php  } ?>
                    </th>
                    <?php echo form_close(); ?>
                  </tr>
                <?php } ?>                 
                </tbody>
                <tfoot>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Último Login</th>
                  <th>Ação</th>
                </tfoot>
              </table>
            


          </div>
        
      </div>   

 

<?php $this->load->view("include/adm_footer.php"); ?>