<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->carrera,
);

$this->menu=array(
	//array('label'=>'Lista Carrera', 'url'=>array('index')),
	//array('label'=>'Crear Carrera', 'url'=>array('create')),
	//array('label'=>'Editar Carrera', 'url'=>array('update', 'id'=>$model->carrera)),
	array('label'=>'Eliminar Carrera', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->carrera),'confirm'=>'¿Seguro que quiere eliminar este artículo?')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Detalle de la Carrera #<?php echo $model->carrera; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'carrera',
	),
)); ?>
