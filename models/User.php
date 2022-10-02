<?php

namespace app\models;

use dektrium\user\Finder;
use dektrium\user\Mailer;
use dektrium\user\models\Account;
use dektrium\user\models\Profile;
use dektrium\user\models\User as UserBase;
use dektrium\user\Module;
use developeruz\db_rbac\interfaces\UserRbacInterface;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property bool    $isAdmin
 * @property bool    $isBlocked
 * @property bool    $isConfirmed
 *
 * Database fields:
 * @property integer $id
 * @property string  $username
 * @property string  $email
 * @property string  $unconfirmed_email
 * @property string  $password_hash
 * @property string  $auth_key
 * @property string  $registration_ip
 * @property integer $confirmed_at
 * @property integer $blocked_at
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $last_login_at
 * @property integer $flags
 *
 * Defined relations:
 * @property Account[] $accounts
 * @property Profile   $profile
 *
 * Dependencies:
 * @property-read Finder $finder
 * @property-read Module $module
 * @property-read Mailer $mailer
 *
 * @author Dmitry Erofeev <dmeroff@gmail.com>
 */
class User extends UserBase implements IdentityInterface, UserRbacInterface
{
    public function getUserName()
    {
        return $this->username;
    }
}
