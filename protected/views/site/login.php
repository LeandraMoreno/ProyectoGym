<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="contenedor">
<!--<h1>Login</h1>-->
<img class="user" src="images/user.png" alt="" style="margin-top: 10px;"/>


<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<!--<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>-->

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Contraseña'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<!--<p class="hint">
			Sugerencia: puede iniciar sesión con <kbd>demo</kbd>/<kbd>demo</kbd> o <kbd>admin</kbd>/<kbd>admin</kbd>.
		</p>-->
	</div>

	<!--<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe', array('class'=>'checkRemenber')); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>-->
 
	<div class="row buttons">
		<?php echo CHtml::submitButton('Iniciar Sesión', array('class'=>'ini'));?>
	</div>


	


<?php $this->endWidget(); ?>
</div><!-- form -->


<a href="<?php echo Yii::app()->createUrl('site/recuperarpassword'); ?>" style="margin-left: 22px;">
Recuperar contraseña
</a>

</div>

