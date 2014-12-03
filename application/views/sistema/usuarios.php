<?php $this->load->view("include/adm_header.php"); ?>

<?php $this->load->view("include/menu_admin.php"); ?>     
      

      <div class="panel panel-default">
          <div class="panel-heading"><center><h1>Gerenciamento de Usuários</h1></center></div>
          <div class="panel-body">

              <div class="table-responsive">
              <!-- <h2><small>Tabela Responsive</small></h2> -->
              <table class="table table-hover table-striped">
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
                    <th><?php  if($users->bloqueado == 'N'){ ?>
                      
                      <button value="<?php  echo $users->id; ?>">Bloquear</button>
                      <?php  }else{ ?>
                      <button value="<?php  echo $users->id; ?>">Desbloquear</button>
                      <?php  } ?>
                    </th>
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
        
      </div>   

 

<?php $this->load->view("include/adm_footer.php"); ?>