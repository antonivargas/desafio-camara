    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.countTo.js"></script>
    <script type="text/javascript" src="http://cdn.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="http://cdn.amcharts.com/lib/3/pie.js"></script>
    <!-- amCharts javascript code -->
    <script type="text/javascript">      
      //var total_users =  "<?php echo $total_usuarios; ?>";
      AmCharts.makeChart("chartdiv1",
        {
          "type": "pie",
          "pathToImages": "http://live.amcharts.com/new/edit///cdn.amcharts.com/lib/3/images/",
          "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
          "innerRadius": "40%",
          "colors": [
            "#428bca",
            "#6ba9df",
            "#f39c12",
            "#2ecc71",
            "#f1c40f",
            "#9b59b6",
            "#04D215",
            "#0D8ECF",
            "#0D52D1",
            "#2A0CD0",
            "#8A0CCF",
            "#CD0D74",
            "#754DEB",
            "#DDDDDD",
            "#999999",
            "#333333",
            "#000000",
            "#57032A",
            "#CA9726",
            "#990000",
            "#4B0C25"
          ],
          "titleField": "category",
          "valueField": "column-1",
          "allLabels": [],
          "balloon": {},
          "legend": {
            "align": "center",
            "markerType": "circle"
          },
          "titles": [],
          "dataProvider": [
            {
              "category": "Total de Usuários",
              "column-1": "<?php echo $total_usuarios; ?>"
            },
            {
              "category": "Usuários que Avaliaram",
              "column-1": "<?php foreach ($graficouser as $somauser){ $soma = $somauser->id_user;} echo $soma;?>"
            }
          ]
        }
      );

      AmCharts.makeChart("chartdiv2",
        {
          "type": "pie",
          "pathToImages": "http://live.amcharts.com/new/edit///cdn.amcharts.com/lib/3/images/",
          "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
          "innerRadius": "40%",
          "colors": [
            "#428bca",
            "#6ba9df",
            "#f39c12",
            "#2ecc71",
            "#f1c40f",
            "#9b59b6",
            "#04D215",
            "#0D8ECF",
            "#0D52D1",
            "#2A0CD0",
            "#8A0CCF",
            "#CD0D74",
            "#754DEB",
            "#DDDDDD",
            "#999999",
            "#333333",
            "#000000",
            "#57032A",
            "#CA9726",
            "#990000",
            "#4B0C25"
          ],
          "titleField": "category",
          "valueField": "column-1",
          "allLabels": [],
          "balloon": {},
          "legend": {
            "align": "center",
            "markerType": "circle"
          },
          "titles": [],
          "dataProvider": [
            {
              "category": "Total de Proposições",
              "column-1": "<?php echo $total_proposicoes; ?>"
            },
            {
              "category": "Proposições Avaliadas",
              "column-1": "<?php foreach ($grafavaliacoes as $somaAvaliacoes){ $somaAva = $somaAvaliacoes->id_proposicao;} echo $somaAva;?>"
            }
          ]
        }
      );
    </script>
  </head>
<body>  
  
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
            <li class="active"><a href="<?php echo site_url('admin/usuarios');?>">Usuários</a></li>            
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
            </li>            
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