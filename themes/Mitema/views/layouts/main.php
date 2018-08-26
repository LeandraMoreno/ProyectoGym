<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>


	<!--<link rel="stylesheet" href="http://deportes.uach.cl/wp-content/themes/deportes_uach/style.css" type="text/css" media="screen" />-->
	
	<link rel="stylesheet" href="http://deportes.uach.cl/wp-content/themes/deportes_uach/assets/stylesheets/unsemantic-grid-responsive.css" type="text/css" />	

	<link rel="stylesheet" href="http://deportes.uach.cl/wp-content/themes/deportes_uach/deportes_uach.css" type="text/css" />
</head>

<body>

<div class="container" id="page">
	
<div id="header">
		
<div id="top">
		    <div id="menu_1">
				<a href="https://www.uach.cl/inicio-uach/contacto">Contacto</a> |
				Mapa del Sitio |
				<a href="http://intranet.uach.cl">Intranet</a>    
			</div>
		</div>

		
<img src="images/header.png" style="width:100%; heigth:auto; margin-bottom: -2px;">
		
	</div><!-- header -->

	<nav id="horizontal">
			<div id='mainmenu'>
                <ul id="menu-principal" class="menu">
                
                <?php $this->widget('zii.widgets.CMenu',array(
                'items'=>array(
				array('label'=>'Panel', 'url'=>array('/site/index')),
				
				array('label'=>'Material', 'url'=>array('/listadoMaterial/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Carreras', 'url'=>array('/carrera/index'),'visible'=>!Yii::app()->user->isGuest,'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Deportes', 'url'=>array('/deporte/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Recinto', 'url'=>array('/recinto/index'),'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Usuarios', 'url'=>array('/user/index'),'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),            
                
));?>
 </ul> </div>		</nav>

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>


	<div class="clear"></div>

	<div id="footer">
		<div class="grid-container">

		Área de Deportes y Recreaci&oacute;n, Puerto Montt, Chile / email: deportes@uach.cl / fono: +56 63 2221323

		<hr />

		&copy; Todos los derechos reservados

	</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
