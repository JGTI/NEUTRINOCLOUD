
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
		 credits: {
           enabled: false
        },
        title: {
            text: 'Análisis de layout {{$EmpresaNombre}} {{$lastUpdate}}'
        },
        subtitle: {
            text: 'Haz clic en la columna del cliente para conocer información a detalle'
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total de productos por cliente'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> of total<br/>'
        },

        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [
			<?php echo join($ArrayClientes, ',') ?>
			]
        }],
		
		
        drilldown: {
            series: [
			<?php echo join($ArrarProductos, ',') ?>
			]
        }
    });
});
		</script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<table width="100%">
<div id="container"></div>
</table>