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
                  <th>Status</th>
                  <th>Ação</th>                  
                </thead>
                <tbody>
                  <tr>
                    <td>Dimi</td>
                    <td>antonivargas@gmail.com</td>
                    <td>Ativo</td>
                    <th><button type="radio">Bloquear</button></th>
                  </tr>
                  <tr>
                    <td>Filipe</td>
                    <td>filipe@gmail.com</td>
                    <td>Ativo</td>
                    <th><button type="radio">Bloquear</button></th>
                  </tr>
                  <tr>
                    <td>Philippe</td>
                    <td>philppe@gmail.com</td>
                    <td>Bloqueado</td>
                    <th><button type="radio">Desbloquear</button></th>
                  </tr>
                </tbody>
                <tfoot>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Status</th>
                  <th>Ação</th>
                </tfoot>
              </table>
            </div>


          </div>
        
      </div>   

 

<?php $this->load->view("include/adm_footer.php"); ?>