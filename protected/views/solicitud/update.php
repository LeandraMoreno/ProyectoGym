<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitud'=>array('index'),
	$model->rut_estudiante=>array('view','id'=>$model->rut_estudiante),
	'Editar',
);

$this->menu=array(
	//array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Ver Solicitud', 'url'=>array('view', 'id'=>$model->id_solicitud)),
	//array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);
?>

<h1>Editar Solicitud de #<?php echo $model->rut_estudiante; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>