<link rel="stylesheet" type="text/css" href="css/estiloPanel.css">
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<body>

<!-- Imagenes y botones para el Panel-->
<section id=container>
	<div>
		<img class="logo" src="images/reserva_material.png">
		<?php echo CHtml::button('Inventario',array('class'=>'name','submit' => array('listadoMaterial/index')));?>
		
	
		<img class="logo" src="images/invent.png" >
		<?php echo CHtml::button('Reserva Material',array('class'=>'name','submit' => array('solicitud/create'),'style'=>'box-shadow: -1px 1px 21px 0px rgb(234, 130, 31);'));?>
	
		<img class="logo" src="images/estadistica.png">
		<?php echo CHtml::button('Estadistica',array('class'=>'name','submit' => array('site/grafico')));?>
	</div>
 

</section>

</body>



