<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */

$this->breadcrumbs=array(
	'ListadoMaterial'=>array('index'),
	$model->nombre_material,
);

$this->menu=array(
	//array('label'=>'List ListadoMaterial', 'url'=>array('index')),
	//array('label'=>'Create ListadoMaterial', 'url'=>array('create')),
	//array('label'=>'Update ListadoMaterial', 'url'=>array('update', 'id'=>$model->id_listado)),
	array('label'=>'Eliminar Material', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_listado),'confirm'=>'¿Seguro que quiere eliminar este artículo?')),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Detalles del Material #<?php echo $model->nombre_material; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id_listado',
		'nombre_material',
		'cantidad_material',
		'nombre_deporte',
	),
)); ?>
