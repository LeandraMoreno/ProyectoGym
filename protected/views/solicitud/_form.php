<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	//'enableAjaxValidation'=>false,
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    'clientOptions'=>array(
    'validateOnSubmit'=>true,
    )
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_solicitud'); ?>
		<?php
         $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'options'=>array(
                        'showAnim'=>'fold',
                        
                ),
                'language'=>'es',
                'model'=>$model,
                'attribute'=>'fecha_solicitud',
                'htmlOptions'=>array(
                        'class'=>'betterform',
                        'tabindex'=>3
                ),'flat'=>false,
                'options'=>array(
                        'dateFormat'=>'yy-mm-dd',
                        'showButtonPanel'=>true,

                        'changeMonth'=>true,
                        'changeYear'=>true,
                        'defaultDate'=>'+1w',
                ),
        )); 
        ?>

		<!--<?php echo $form->textField($model,'fecha_solicitud'); ?>-->
		<?php echo $form->error($model,'fecha_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rut_estudiante'); ?>
		<?php echo $form->textField($model,'rut_estudiante',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rut_estudiante'); ?>
	</div> 


	<!--El ingreso del 'Nombre_Estudiante' será en Mayuscula -text-transform:uppercase- --> 
	<div class="row">
		<?php echo $form->labelEx($model,'nombre_estudiante'); ?>
		<?php echo $form->textField($model,'nombre_estudiante',array('size'=>60,'maxlength'=>90 ,'style'=>'text-transform:uppercase;')); ?>
		<?php echo $form->error($model,'nombre_estudiante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carrera'); ?>
		<?php echo $form->dropDownList($model,'carrera',CHtml::listData(carrera::model()->findAll(),'carrera','carrera'),array('prompt'=>'Seleccione una Carrera')); ?>
		<!--<?php echo $form->textField($model,'carrera',array('size'=>60,'maxlength'=>150)); ?>-->
		<?php echo $form->error($model,'carrera'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_deporte'); ?>
		<?php echo $form->dropDownList($model,'nombre_deporte',CHtml::listData(Deporte::model()->findAll(),'nombre_deporte','nombre_deporte'),array(
        'ajax'=>array(
        'type'=>'POST',
        'url'=> CController::createUrl('Solicitud/SelectDeporte'),
        'update'=>'#'.CHtml::activeId($model,'nombre_material'),
        ),'prompt'=>'Seleccione Deporte')); ?>

		<!--<?php echo $form->textField($model,'nombre_deporte',array('size'=>60,'maxlength'=>60)); ?>-->
		<?php echo $form->error($model,'nombre_deporte'); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->labelEx($model,'id_listado'); ?>
		<?php echo $form->textField($model,'id_listado'); ?>
		<?php echo $form->error($model,'id_listado'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_material'); ?>
		<?php echo $form->dropDownList($model,'nombre_material',array('prompt'=>'Seleccione un material')); ?>

		<!--<?php echo $form->textField($model,'nombre_material',array('size'=>60,'maxlength'=>150)); ?>-->
		<?php echo $form->error($model,'nombre_material'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cantidad_solicitud'); ?>
		<?php echo $form->textField($model,'cantidad_solicitud'); ?>
		<?php echo $form->error($model,'cantidad_solicitud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_participantes'); ?>
		<?php echo $form->textField($model,'num_participantes'); ?>
		<?php echo $form->error($model,'num_participantes'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_recinto'); ?>
		<?php echo $form->dropDownList($model,'nombre_recinto',CHtml::listData(recinto::model()->findAll(),'nombre_recinto','nombre_recinto'),array('prompt'=>'Seleccione Recinto')); ?>

		<!--<?php echo $form->textField($model,'nombre_recinto',array('size'=>60,'maxlength'=>145)); ?>-->
		<?php echo $form->error($model,'nombre_recinto'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar' , array('class'=>'btnSoli')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->