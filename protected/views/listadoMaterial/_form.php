<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'listado-material-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_material'); ?>
		<?php echo $form->textField($model,'nombre_material',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'nombre_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad'); ?>
		<?php echo $form->textField($model,'cantidad_material'); ?>
		<?php echo $form->error($model,'cantidad_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deporte'); ?>
		<?php echo $form->dropDownList($model,'nombre_deporte',CHtml::listData(deporte::model()->findAll(),'nombre_deporte','nombre_deporte'),array('empty'=>'Seleccione un Deporte')); ?>

		<!--<?php echo $form->textField($model,'nombre_deporte',array('size'=>60,'maxlength'=>60)); ?>-->
		<?php echo $form->error($model,'nombre_deporte'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btnSoli')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->