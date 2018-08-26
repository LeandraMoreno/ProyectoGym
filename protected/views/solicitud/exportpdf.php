<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<?php
$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');
$dataProvider = $_SESSION['datos_filtrados']->getData();
$contador=count($dataProvider);
//creamos las cabeceras
$html.='
<head>
<style>
table {
    font-family: DejaVu Sans Mono, monospace;
    border-collapse: collapse;
    width: 100%;
}

td {
    border: 1px solid #e0d7c5;
    text-align: left;
    padding: 6px;
    font-size: 13.5px;
}

tr:nth-child(even) {
    background-color: #e8e8e8;
}
</style>
</head>

<table align="center"><tr>
<td align="center"><b>LISTADO DE SOLICITUD MATERIAL</b></td>
</tr></table>
<img src="images/Log-UACH.png" style="width:20%; heigth:auto; float: right; margin-top: -60px;">
Total Resultados: '.$contador.'
<table class="detail-view2" repeat_header="1" cellpadding="1" cellspacing="1"
width="100%" border="0">
<tr class="principal">

<td class="principal" width="7%">&nbsp;Fecha Solicitud:</td>
<td class="principal" width="7%">&nbsp;Rut Estudiante:</td>
<td class="principal" width="7%">&nbsp;Nombre Estudiante:</td>
<td class="principal" width="7%">&nbsp;Carrera:</td>
<td class="principal" width="7%">&nbsp;Deporte:</td>
</tr>';
$i=0;
$val=count($dataProvider);
//dentro del ciclo vamos insertando los datos obtenidos
while($i<$val){
$html.='
<tr class="odd">

<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]
["fecha_solicitud"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]
["rut_estudiante"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]
["nombre_estudiante"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]
["carrera"].'</td>
<td class="odd" width="7%">&nbsp;'.$dataProvider[$i]
["nombre_deporte"].'</td>';

$html.='</tr>'; 
$i++;
}
$html.='</table>';
$html=utf8_encode($html);
$mpdf=new mPDF("");
$mpdf->WriteHTML($html);
$mpdf->Output("");
exit; 
?>
