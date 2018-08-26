<?php

class RecuperarPassword extends CFormModel {
	public $username;
	public $email;
	public $captcha;

	public function rules()
	{
		return array(
			array('username,email, captcha',
				'required')
		);
}
}