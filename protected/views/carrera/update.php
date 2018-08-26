<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	$model->carrera=>array('view','id'=>$model->carrera),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Carrera', 'url'=>array('index')),
	//array('label'=>'Crear Carrera', 'url'=>array('create')),
	//array('label'=>'Ver Carrera', 'url'=>array('view', 'id'=>$model->carrera)),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Editar Carrera #<?php echo $model->carrera; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>