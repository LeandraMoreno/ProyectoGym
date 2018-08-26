<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operaciones',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
<img src="images/1.png" style="display:block; margin:auto; margin-top: 40px;">
<img src="images/2.png" style="display:block; margin:auto; margin-top: 60px;">
<img src="images/3.png" style="display:block; margin:auto; margin-top: 60px;">
<img src="images/4.png" style="display:block; margin:auto; margin-top: 60px;">
<img src="images/5.png" style="display:block; margin:auto; margin-top: 60px;">
</div>
<?php $this->endContent(); ?>
