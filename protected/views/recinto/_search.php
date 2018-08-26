<?php
/* @var $this RecintoController */
/* @var $model Recinto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'nombre_recinto'); ?>
		<?php echo $form->dropDownList($model,'nombre_recinto',CHtml::listData(recinto::model()->findAll(),'nombre_recinto','nombre_recinto'),array('prompt'=>'Seleccione un Recinto')); ?>

		<!--<?php echo $form->textField($model,'nombre_recinto',array('size'=>60,'maxlength'=>145)); ?>-->
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar', array('class'=>'btnSoli')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->