<?php
/* @var $this RecintoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recintos',
);

$this->menu=array(
	array('label'=>'Crear Recinto', 'url'=>array('create')),
	array('label'=>'Administrar Recinto', 'url'=>array('admin')),
);
?>

<h1>Recintos <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
