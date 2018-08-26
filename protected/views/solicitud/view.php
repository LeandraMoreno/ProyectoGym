<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitud'=>array('index'),
	$model->rut_estudiante,
);

$this->menu=array(
	//array('label'=>'List Solicitud', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Editar Solicitud', 'url'=>array('update', 'id'=>$model->id_solicitud)),
	//array('label'=>'Delete Solicitud', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_solicitud),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Solicitud', 'url'=>array('admin')),
);
?>

<h1>Detalle solicitud de #<?php echo $model->rut_estudiante; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_solicitud',
		'fecha_solicitud',
		'rut_estudiante',
		'nombre_estudiante',
		'carrera',
		'nombre_deporte',
		//'id_listado',
		'nombre_material',
		'cantidad_solicitud',
		'num_participantes',
		'nombre_recinto',
	),
)); ?>
