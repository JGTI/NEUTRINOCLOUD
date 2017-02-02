<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>		

<table>
<tr>
<script>
var f=1;
</script>
@foreach($Almacen as $AlmacenT)
<script type="text/javascript">
$(function () {
	
	if(f==3){
	var Red='red';
	}
	else
		{
	var Red='';
	}
	f++;
    $(document).ready(function () {
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

		
        Highcharts.chart('{{$AlmacenT->id}}', {
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.random();
                            series.addPoint([x, y], true, true);
                        }, 1000);
                    }
                }
            },
            title: {
                text: '{{$AlmacenT->nombre}}'
            },
			credits: {
                 enabled: false
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            yAxis: {
                title: {
                    text: 'Grados'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#0000'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        Highcharts.dateFormat('%Y-%m-%d %H:%M:%S', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 2);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
				
                name: 'Random data',
				color: ''+Red+'',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;

                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: Math.random()
                        });
                    }
                    return data;
                }()),
				
				
            }]
        });
    });
	});
</script>
<td>
<div id="{{$AlmacenT->id}}" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
</td>
@endforeach
</tr>
</table>
<br>