<?php
/* @var $this CarreraController */
/* @var $model Carrera */

$this->breadcrumbs=array(
	'Carrera'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Carrera', 'url'=>array('index')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Crear Carrera <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>