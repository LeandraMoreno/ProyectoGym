<?php
/* @var $this RecintoController */
/* @var $data Recinto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_recinto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nombre_recinto), array('view', 'id'=>$data->nombre_recinto)); ?>
	<br />


</div>