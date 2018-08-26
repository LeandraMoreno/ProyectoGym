<?php
/* @var $this ListadoMaterialController */
/* @var $data ListadoMaterial */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_listado')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_listado), array('view', 'id'=>$data->id_listado)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_material')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_material')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_material); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_deporte')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_deporte); ?>
	<br />


</div>