<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $password_reset_token;
    public $replica;
    public $rememberMe = false;

    private $_user = false;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['username', 'password'], 'required'],
            // rememberMe must be a boolean value
            [['rememberMe', 'replica'], 'boolean'],
            // password is validated by validatePassword()
            ['password', 'validatePassword'],
            // password is validated by validatePasswordToken()
            ['password_reset_token', 'validatePasswordResetToken',],
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     */
    public function validatePassword()
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || $user->validatePassword($this->password) != $user->password_hash) {
                $this->addError('password', 'Incorrect username or password.');

                return false;
            } else return true;
        }

        return false;
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     */
    public function validateReplica()
    {
        return ($this->replica) ? 1 : 0;
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     */
    public function validatePasswordResetToken()
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if ($user->role == "admin") {
                if ($user->validatePassword($this->password_reset_token) == $user->password_reset_token) {
                    return true;
                } else {
                    $this->addError('password_reset_token', 'Incorrect.');

                    return false;
                }
            }
        }
    }

    /**
     * Logs in a user using the provided username and password.
     *
     * @return boolean whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate() && $this->validatePassword()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }

    public function getRole()
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            return ($user->role == "admin") ? true : false;
        }

        return false;
    }
}
