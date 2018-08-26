<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */

$this->breadcrumbs=array(
	'ListadoMaterial'=>array('index'),
	$model->nombre_material=>array('view','id'=>$model->nombre_material),
	'Editar',
);

$this->menu=array(
	array('label'=>'Lista Material', 'url'=>array('index')),
	//array('label'=>'Create ListadoMaterial', 'url'=>array('create')),
	//array('label'=>'View ListadoMaterial', 'url'=>array('view', 'id'=>$model->id_listado)),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Editar Material #<?php echo $model->nombre_material; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>