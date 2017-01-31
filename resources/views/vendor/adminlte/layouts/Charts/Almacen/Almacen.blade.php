<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
#container {
	min-width: 320px;
	max-width: 600px;
	margin: 0 auto;
}
		</style>
		<script type="text/javascript">
$(function () {
    var chart = Highcharts.chart('container', {

        title: {
            text: 'Almacen Region Bagio'
        },

        subtitle: {
            text: 'Productos en Almacen'
        },

        xAxis: {
            categories: ['Queretaro', 'Zamora', 'Villagran 1', 'Villagran 2', 'Irapuato']
        },

        series: [{
            type: 'column',
            colorByPoint: true,
            data: [29.9, 71.5, 106.4, 129.2, 1],
            showInLegend: false
        }]

    });


    $('#plain').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: false
            },
            subtitle: {
                text: 'Productos'
            }
        });
    });

    $('#inverted').click(function () {
        chart.update({
            chart: {
                inverted: true,
                polar: false
            },
            subtitle: {
                text: 'Inverted'
            }
        });
    });

    $('#polar').click(function () {
        chart.update({
            chart: {
                inverted: false,
                polar: true
            },
            subtitle: {
                text: 'Polar'
            }
        });
    });

});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container"></div>
<button id="plain" class="btn btn-xs btn-primary">Barras</button>
<button id="inverted" class="btn btn-xs btn-info">Invertida</button>
<button id="polar" class="btn btn-xs btn-verde">Polar</button>
	</body>
</html>
</html>