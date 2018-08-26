<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Usuario'=>array('index'),
	$model->login=>array('view','id'=>$model->login),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista Usuario', 'url'=>array('index')),
	//array('label'=>'Create User', 'url'=>array('create')),
	//array('label'=>'View User', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Editar Usuario #<?php echo $model->login; ?></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>