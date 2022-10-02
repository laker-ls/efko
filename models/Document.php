<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "documents".
 *
 * @property int $id
 * @property int $user_id
 * @property int $permission_id
 * @property string $name
 * @property string|null $description
 * @property string|null $updated_at
 * @property string $created_at
 *
 * @property User $user
 * @property DocumentsPermission $permission
 */
class Document extends ActiveRecord
{
    public const PERMISSION_PRIVATE = 3;
    public const PERMISSION_SEMI_PRIVATE = 2;
    public const PERMISSION_PUBLIC = 1;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documents';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'user_id', 'permission_id'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['name', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'Автор',
            'permission_id' => 'Видимость',
            'name' => 'Наименование',
            'description' => 'Содержимое',
            'updated_at' => 'Обновлен',
            'created_at' => 'Создан',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getPermission()
    {
        return $this->hasOne(DocumentsPermission::class, ['id' => 'permission_id']);
    }
}
