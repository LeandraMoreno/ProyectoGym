<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


public function actionRecuperarpassword()
	{
		$model = new RecuperarPassword;
		$msg =" ";

		if (isset($_POST["RecuperarPassword"]))
		{
			$model->attributes = $_POST['RecuperarPassword'];
			if(!$model->validate())
			{
				$msg = "<strong class='text-error'>Error al enviar el formulario</strong>";
			}
			else
			{
				//Consulta y enviaremos el email
				$conexion = Yii::app()->db;

				$consulta = "SELECT login, email from user where ";
				$consulta .= "login='".$model->username."'AND email='$model->email'";
				$resultado =$conexion->createCommand($consulta);
				$filas = $resultado->query();
				$existe = false;

				foreach ($filas as $fila) {
					$existe = true;
				}

				if($existe===true)
				{
					$consulta = "SELECT password from user where ";
					$consulta .= "login='".$model->username."'AND email='".$model->email."'";
					$resultado = $conexion->createCommand($consulta)->query();
					$resultado->bindColumn(1, $password);

				while($resultado->read()!==false)
				{
					$password =$password;
				}

				$email =new EnviarEmail;

				$subject="Has solicitado recuperar tu password en ";
				$subject .= Yii::app()->name;
				$message ="Bienved@ " . $model->username . " su password es: ";
				$message .= $password;
				$message .="<br /><br />";
				$message .="<a href='http://localhost/Gim/'>Regresar a la web</a>";

				$email->Enviar_Email
				(
					array(Yii::app()->params['adminEmail'], Yii::app()->name),
					array($model->email, $model->username),
					$subject,
					$message
				);

				$model->username='';
				$model->email='';
				$model->captcha='';
				$msg ="<strong class='text-info' style='margin-left: 50px;color: blue;background: #d1ffd5;font-size: x-large;'>Enhorabuena, le hemos enviado la contraseña a su correo.</strong>";
				}
				else
				{
					$msg = "<strong class='text-error' style='color: red;margin-left: 50px;background: linen;font-size: x-large;'>Error, el usuario o la dirección de correo electrónico no existe.</strong>";
				}
			}
		}

		$this->render('recuperarpassword', array('model' => $model, 'msg' => $msg));
	}






	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}



	public function actionGrafico()
	{
		$this->render('grafico');
	}















	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Gracias por contactarnos. Nosotros responderemos a la mayor brevedad posible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}



	
	
}