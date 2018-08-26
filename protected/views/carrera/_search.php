<?php
/* @var $this CarreraController */
/* @var $model Carrera */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'carrera'); ?>
		<?php echo $form->dropDownList($model,'carrera',CHtml::listData(carrera::model()->findAll(),'carrera','carrera'),array('prompt'=>'Seleccione una Carrera')); ?>

		<!--<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>150)); ?>-->
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->