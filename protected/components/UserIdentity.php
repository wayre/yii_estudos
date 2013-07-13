<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{


		$model = Usuario::model()->findByAttributes(array('user'=>$this->username));
		if(empty($model)){
		    $this->errorCode=self::ERROR_USERNAME_INVALID;
		}
		else if($model->pass !== $this->password){
		    $this->errorCode=self::ERROR_PASSWORD_INVALID;
		}
		else{
			$model->setAttribute('id', $model->id);

			foreach ($model as $key => $value) {
				$this->setState($key, (string) $value);
			}
			$this->setState('userRole', $model->id_grupo);
			$this->errorCode=self::ERROR_NONE;
		}
        return !$this->errorCode;
	}
}