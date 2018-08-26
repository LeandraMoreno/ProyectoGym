<?php
/* @var $this CarreraController */
/* @var $data Carrera */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->carrera), array('view', 'id'=>$data->carrera)); ?>
	<br />


</div>