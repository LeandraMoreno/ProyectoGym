<?php
Yii::import('application.extensions.phpmailer.JPhpMailer');

/**
* 
*/
class EnviarEmail
{
	
	public function Enviar_Email(array $from, array $to, $subject, $message)
	{
		$mail = new JPhpMailer;
		$mail->IsSMTP();
		$mail->Host = 'localhost';
		$mail->SetFrom($from[0], $from[1]);
		$mail->Subject =$subject;
		$mail->MsgHTML($message);
		$mail->AddAddress($to[0], $to[1]);
		$mail->Send();
	}
}