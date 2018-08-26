
<!-- Llama a la base de datos-->
<?php require_once("connection.php"); ?> 

<!DOCTYPE HTML>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Estadistica Example</title>

		<style type="text/css">

		</style>
	</head>
	<body>
<script src="js/highcharts.js"></script>
<script src="js/exporting.js"></script>
<script src="js/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



		<script type="text/javascript">

Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Estadistica'
    },
    
    xAxis: {
        categories: [
        //Muestra en el EjeX los nombres de cada Material a traves de una consulta SQL
            <?php $sql ="SELECT date_format(fecha_solicitud, '%m-%Y')
                as fecha_solicitud 
                FROM solicitud
                group by 'Mes', date_format(fecha_solicitud, '%m-%Y');";
            $result = mysqli_query($connection,$sql);
            while ($registros = mysqli_fetch_array($result))
            {
            ?>
            '<?php echo $registros["fecha_solicitud"]; ?>',
            
            <?php
            }    
            ?>

        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad' //nombre del EjeY
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        //Muestra la cantidad de cada Material a traves de una consulta SQL
        name: 'total mensual',
        data: [<?php $sql ="SELECT sum(num_participantes) 
            as num_participantes
            FROM solicitud
            group by month(fecha_solicitud);";
            $result = mysqli_query($connection,$sql);
            while ($registros = mysqli_fetch_array($result))
            {
            ?>
                <?php echo $registros["num_participantes"]; ?>,
            <?php
            }
            ?>
            ]

    },]
});
		</script>
	</body>
</html>

