<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deporte'=>array('index'),
	$model->nombre_deporte,
);

$this->menu=array(
	//array('label'=>'Lista Deporte', 'url'=>array('index')),
	//array('label'=>'Crear Deporte', 'url'=>array('create')),
	//array('label'=>'Editar Deporte', 'url'=>array('update', 'id'=>$model->nombre_deporte)),
	array('label'=>'Eliminar Deporte', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nombre_deporte),'confirm'=>'¿Seguro que quiere eliminar este artículo?')),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Detalle del Deporte #<?php echo $model->nombre_deporte; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_deporte',
	),
)); ?>
