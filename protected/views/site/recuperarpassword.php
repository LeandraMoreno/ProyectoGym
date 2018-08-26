<?php

$this->pageTitle='Recuperar password';

$this->breadcrumbs= array('RecuperarPassword');

echo $msg;
?>

<div class="form">
<?php $form = $this->beginWidget('CActiveForm', array(
	'method' => 'POST',
	'action' => Yii::app()->createUrl('site/recuperarpassword'),
	'enableClientValidation'=> true,
	'clientOptions' => array(
		'validateOnSubmit' => true,
	),
)); ?>
	<br>
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>

	</div>

	<div class="row">
		<?php
		echo $form->labelEx($model, 'email');
		echo $form->textField($model, 'email');
		echo $form->error($model, 'email',array('class' => 'text-error'));
		?>
	</div>

	<div class="row">
		<br>
		<?php
		echo $form->labelEx($model, 'captcha'); ?>
		<?php $this->widget('CCaptcha', array('buttonLabel' => 'Actualizar código'));
		echo $form->textField($model, 'captcha'); ?>

		<div class="text-info">
			Por favor, introducce el texto que ves en la imagen.
		</div>
		<?php echo $form->error($model,'captcha',array('class'=>'text-error')); ?>
		<br>
	</div>
	
	
	<div class="row">
		<?php echo CHtml::submitButton('Recuperar password', array('class'=>'btnRecp btn-primary')); ?>
	</div>
	
	

<?php $this->endWidget(); ?>
</div>