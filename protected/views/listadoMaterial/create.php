<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */

$this->breadcrumbs=array(
	'ListadoMaterial'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Material', 'url'=>array('index')),
	array('label'=>'Administrar Material', 'url'=>array('admin')),
);
?>

<h1>Crear Material <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>