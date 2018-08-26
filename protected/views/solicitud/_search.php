<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id_solicitud'); ?>
		<?php echo $form->textField($model,'id_solicitud'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'fecha_solicitud'); ?>
		<?php
         $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'options'=>array(
                        'showAnim'=>'fold',
                        
                ),
                'model'=>$model,
                'attribute'=>'fecha_solicitud',
                'htmlOptions'=>array(
                        'class'=>'betterform',
                        'tabindex'=>3
                ),
                'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>false,
                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'defaultDate'=>'+1w',
                ),
        )); 
        ?>

		<!--<?php echo $form->textField($model,'fecha_solicitud'); ?>-->
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'rut_estudiante'); ?>
		<?php echo $form->textField($model,'rut_estudiante',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_estudiante'); ?>
		<?php echo $form->textField($model,'nombre_estudiante',array('size'=>60,'maxlength'=>90)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'carrera'); ?>
		<?php echo $form->dropDownList($model,'carrera',CHtml::listData(carrera::model()->findAll(),'carrera','carrera'),array('prompt'=>'Seleccione una Carrera')); ?>

		<!--<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>150)); ?>-->
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_deporte'); ?>
		<?php echo $form->dropDownList($model,'nombre_deporte',CHtml::listData(deporte::model()->findAll(),'nombre_deporte','nombre_deporte'),array('prompt'=>'Seleccione un Deporte')); ?>

		<!--<?php echo $form->textField($model,'nombre_deporte',array('size'=>60,'maxlength'=>60)); ?>-->
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'id_listado'); ?>
		<?php echo $form->textField($model,'id_listado'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_material'); ?>
		<?php echo $form->textField($model,'nombre_material',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cantidad_solicitud'); ?>
		<?php echo $form->textField($model,'cantidad_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_participantes'); ?>
		<?php echo $form->textField($model,'num_participantes'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'nombre_recinto'); ?>
		<?php echo $form->dropDownList($model,'nombre_recinto',CHtml::listData(recinto::model()->findAll(),'nombre_recinto','nombre_recinto'),array('prompt'=>'Seleccione Recinto')); ?>

		<!--<?php echo $form->textField($model,'nombre_recinto',array('size'=>60,'maxlength'=>145)); ?>-->
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->