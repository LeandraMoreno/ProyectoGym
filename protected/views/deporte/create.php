<?php
/* @var $this DeporteController */
/* @var $model Deporte */

$this->breadcrumbs=array(
	'Deporte'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Deporte', 'url'=>array('index')),
	array('label'=>'Administrar Deporte', 'url'=>array('admin')),
);
?>

<h1>Crear Deporte <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>