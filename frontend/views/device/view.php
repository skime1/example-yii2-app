<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use frontend\helpers\ContentHelper;

/** @var yii\web\View $this */
/** @var common\models\Device $model */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Devices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="device-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            [
                'attribute' => 'store_id',
                'value' => function($model){
                    return ContentHelper::getValueRelationalModel($model, 'store', 'title');
                }
            ],
            'created_at',
        ],
    ]) ?>

</div>
