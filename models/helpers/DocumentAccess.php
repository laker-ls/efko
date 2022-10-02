<?php

namespace app\models\helpers;

use app\models\Document;
use Yii;
use yii\base\Model;

class DocumentAccess extends Model
{
    public static function crudSelfOrAdmin(Document $model)
    {
        return ($model->user_id == Yii::$app->user->id || Yii::$app->user->can('admin'));
    }
}
