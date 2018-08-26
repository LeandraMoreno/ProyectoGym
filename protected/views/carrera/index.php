<?php
/* @var $this CarreraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carrera',
);

$this->menu=array(
	array('label'=>'Crear Carrera', 'url'=>array('create')),
	array('label'=>'Administrar Carrera', 'url'=>array('admin')),
);
?>

<h1>Carreras <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
