<?php
use yii\helpers\Html;

echo Html::a(Html::encode($model->title), 
    ['device/', 'DeviceSearch' => ['title' => $model->title]], 
    ['class' => 'click-device', 'target' => '_blank']);

?>