<?php

use common\models\Device;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use frontend\hellpers\StoreHelper;
use yii\grid\ActionColumn;
use kartik\grid\GridView;
use kartik\grid\DataColumn;
use kartik\select2\Select2;


/** @var yii\web\View $this */
/** @var frontend\models\search\DeviceSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Devices';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="device-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'title',
                'filterInputOptions' => [
                    'class'       => 'form-control',
                    'placeholder' => 'Type in some characters...',
                ],
            ],
            [
                'label' => 'Store',
                'attribute' => 'store_id',
                'value' => 'store.title',
                'filterType' => GridView::FILTER_SELECT2,
                'filter' => StoreHelper::getExistingStoreTitles(),
                'filterWidgetOptions' => [
                    'pluginOptions' => [
                        'placeholder' => 'Select a store ...',
                        'allowClear' => true,
                    ],
                ],
            ],
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:H:m d.m.Y'],
                
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Device $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
        'panel' => [
            'heading'=>'<h3 class="panel-title"><i class="fas fa-globe"></i>Devices</h3>',
            'type'=>'success',
            'before'=>Html::a('<i class="fas fa-plus"></i> Create', ['create'], ['class' => 'btn btn-success']),
            'after'=>Html::a('<i class="fas fa-redo"></i> Reset', ['index'], ['class' => 'btn btn-outline-secondary']),
            'footer'=>false
        ],
    ]); ?>


</div>


<?php 
