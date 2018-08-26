<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id_listado'); ?>
		<?php echo $form->textField($model,'id_listado'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'material'); ?>
		<?php echo $form->textField($model,'nombre_material',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad_material'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'deporte'); ?>
		<?php echo $form->dropDownList($model,'nombre_deporte',CHtml::listData(deporte::model()->findAll(),'nombre_deporte','nombre_deporte'),array('prompt'=>'Seleccione un Deporte')); ?>
		<!--<?php echo $form->textField($model,'nombre_deporte',array('size'=>60,'maxlength'=>60)); ?>-->
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->