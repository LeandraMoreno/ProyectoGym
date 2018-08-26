<?php
/* @var $this DeporteController */
/* @var $model Deporte */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deporte-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_deporte'); ?>
		<?php echo $form->textField($model,'nombre_deporte',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'nombre_deporte'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btnSoli')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->