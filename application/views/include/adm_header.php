<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Admin |Como vai a Câmara</title>
    <meta name="description" content="Como vai a câmara, proposições de leis dos parlamentares brasileiros" />
    <meta name="keywords" content="leis,deputado,senador,PL" />
    <!-- Bootstrap -->    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="http://cdn.amcharts.com/lib/3/amcharts.js"></script>
    <script type="text/javascript" src="http://cdn.amcharts.com/lib/3/pie.js"></script>
    <!-- amCharts javascript code -->
    <script type="text/javascript">
      AmCharts.makeChart("chartdiv",
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
              "category": "category 1",
              "column-1": "6"
            },
            {
              "category": "category 3",
              "column-1": 2
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
              "category": "category 1",
              "column-1": "6"
            },
            {
              "category": "category 3",
              "column-1": 2
            }
          ]
        }
      );

      AmCharts.makeChart("chartdiv3",
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
              "category": "category 1",
              "column-1": "6"
            },
            {
              "category": "category 3",
              "column-1": 2
            }
          ]
        }
      );

      AmCharts.makeChart("chartdiv4",
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
              "category": "category 1",
              "column-1": "6"
            },
            {
              "category": "category 3",
              "column-1": 2
            }
          ]
        }
      );

      AmCharts.makeChart("chartdiv5",
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
              "category": "category 1",
              "column-1": "6"
            },
            {
              "category": "category 3",
              "column-1": 2
            }
          ]
        }
      );
    </script>
  </head>
<body>  
  
  <div class="container-fluid">