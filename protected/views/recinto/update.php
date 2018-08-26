<?php
/* @var $this RecintoController */
/* @var $model Recinto */

$this->breadcrumbs=array(
	'Recintos'=>array('index'),
	$model->nombre_recinto=>array('view','id'=>$model->nombre_recinto),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Recinto', 'url'=>array('index')),
	//array('label'=>'Create Recinto', 'url'=>array('create')),
	//array('label'=>'View Recinto', 'url'=>array('view', 'id'=>$model->nombre_recinto)),
	array('label'=>'Administrar Recinto', 'url'=>array('admin')),
);
?>

<h1>Editar Recinto #<?php echo $model->nombre_recinto; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>