<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deporte'=>array('index'),
	$model->nombre_deporte=>array('view','id'=>$model->nombre_deporte),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Deporte', 'url'=>array('index')),
	//array('label'=>'Crear Deporte', 'url'=>array('create')),
	//array('label'=>'Ver Deporte', 'url'=>array('view', 'id'=>$model->nombre_deporte)),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Editar Deporte #<?php echo $model->nombre_deporte; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>