<?php
/* @var $this ListadoMaterialController */
/* @var $model ListadoMaterial */

$this->breadcrumbs=array(
	'ListadoMaterial'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista Material', 'url'=>array('index')),
	array('label'=>'Crear Material', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#listado-material-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Material <IMG SRC="images/1-2.png" style="margin-left: 20px"><IMG SRC="images/1-8.png" style="margin-left: 50px"><IMG SRC="images/2-2.png" style="margin-left: 50px"><IMG SRC="images/1-1.png" style="margin-left: 50px"></h1>
<hr/> <!--Linea Horizontal -->

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'listado-material-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id_listado',
		'nombre_material',
		'cantidad_material',
		'nombre_deporte',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
