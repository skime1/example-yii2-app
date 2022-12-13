<?php

use common\models\Store;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use yii\bootstrap5\Modal;

/** @var yii\web\View $this */
/** @var common\models\search\StoreSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Stores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="store-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title',
                'format' => 'raw',
                'value' => function($model){
                    return Html::a(Html::encode($model->title), [
                        'store/view-devices',
                        'id' => $model->id
                    ],
                    ['class' => 'modal-first']);
                }
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:H:m d.m.Y'],
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Store $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="fas fa-globe"></i>Stores</h3>',
            'type'=>'success',
            'before'=>Html::a('<i class="fas fa-plus"></i> Create', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="fas fa-redo"></i> Reset', ['index'], ['class' => 'btn btn-outline-secondary']),
            'footer'=>false
        ],
    
    ]); ?>

<?= $this->render('_modal'); ?>

</div>
