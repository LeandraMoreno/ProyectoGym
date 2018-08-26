<?php
/* @var $this RecintoController */
/* @var $model Recinto */

$this->breadcrumbs=array(
	'Recintos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Recinto', 'url'=>array('index')),
	array('label'=>'Administrar Recinto', 'url'=>array('admin')),
);
?>

<h1>Crear Recinto <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>