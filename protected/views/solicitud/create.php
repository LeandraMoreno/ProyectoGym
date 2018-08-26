<?php
/* @var $this SolicitudController */
/* @var $model Solicitud */

$this->breadcrumbs=array(
	'Solicitud'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista Solicitud', 'url'=>array('index')),
	array('label'=>'Administrar Solicitud', 'url'=>array('admin')),
);
?>

<h1><IMG SRC="images/header10.png" style="width: 290px;">           <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->renderPartial('_form', array('model'=>$model)); ?>