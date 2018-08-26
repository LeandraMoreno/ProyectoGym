<?php
/* @var $this DeporteController */
/* @var $data Deporte */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_deporte')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombre_deporte), array('view', 'id'=>$data->nombre_deporte)); ?>
	<br />


</div>