<?php
/* @var $this SolicitudController */
/* @var $data Solicitud */
?>

<div class="view">

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_solicitud')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_solicitud), array('view', 'id'=>$data->id_solicitud)); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_solicitud); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('rut_estudiante')); ?>:</b>
	<?php echo CHtml::encode($data->rut_estudiante); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_estudiante')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_estudiante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carrera')); ?>:</b>
	<?php echo CHtml::encode($data->carrera); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_deporte')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_deporte); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('id_listado')); ?>:</b>
	<?php echo CHtml::encode($data->id_listado); ?>
	<br />-->

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_material')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_material); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('cantidad_solicitud')); ?>:</b>
	<?php echo CHtml::encode($data->cantidad_solicitud); ?>
	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_participantes')); ?>:</b>
	<?php echo CHtml::encode($data->num_participantes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_recinto')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_recinto); ?>
	<br />


</div>