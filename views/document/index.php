<?php

use app\models\Document;
use app\models\helpers\DocumentAccess;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\DocumentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Документы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'description',
            ['attribute' => 'user_id',
                'value' => function (Document $model) {
                    return $model->user->username;
                }
            ],
            ['attribute' => 'permission_id',
                'value' => function (Document $model) {
                    return $model->permission->name;
                }
            ],
            'updated_at',
            'created_at',

            ['class' => ActionColumn::class,
                'header' => 'Действия',
                'template' => !Yii::$app->user->isGuest ? '{update} {delete}' : '',
            ],
        ],
    ]); ?>


</div>
