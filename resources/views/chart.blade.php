
<!DOCTYPE html>
<html>
<head>
    <title>Wykres umów</title>
</head>
   
<body>

<div id="container"></div>
</body>
  
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var uop =  <?php echo json_encode($uop) ?>;
   var uz = <?php echo json_encode($uz)?>;
    Highcharts.chart('container', {
        title: {
            text: 'Liczba umów'
        },
        subtitle: {
            text: 'hrapp!'
        },
         xAxis: {
            categories: ['Styczeń', 'Luty', 'Marzec', 'Kwiecień', 'Maj', 'Czerwiec', 'Lipiec', 'Sierpień', 'Wrzesień', 'Październik', 'Listopad', 'Grudzień']
        },
        yAxis: {
            title: {
                text: 'Liczba umów w danym miesiącu'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            type :"line",
            name: 'Umowa o pracę',
            data: uop
            
        },
        {
          type:"line",
            name:"Umowa zlecenie",
            data:uz
        }
        
      ],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script>
</html>