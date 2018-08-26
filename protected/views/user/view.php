<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->login,
);

$this->menu=array(
	//array('label'=>'List User', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Seguro que quiere eliminar este artículo?')),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Detalle de Usuario #<?php echo $model->login; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'login',
		'password',
		'email',
	),
)); ?>
