<?php
/* @var $this RecintoController */
/* @var $model Recinto */

$this->breadcrumbs=array(
	'Recintos'=>array('index'),
	$model->nombre_recinto,
);

$this->menu=array(
	//array('label'=>'Lista Recinto', 'url'=>array('index')),
	//array('label'=>'Create Recinto', 'url'=>array('create')),
	//array('label'=>'Update Recinto', 'url'=>array('update', 'id'=>$model->nombre_recinto)),
	array('label'=>'Eliminar Recinto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->nombre_recinto),'confirm'=>'¿Seguro que quiere eliminar este artículo?')),
	array('label'=>'Administrar Recinto', 'url'=>array('admin')),
);
?>

<h1>Detalle de Recinto #<?php echo $model->nombre_recinto; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'nombre_recinto',
	),
)); ?>
