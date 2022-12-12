<?php

use yii\widgets\ListView;
use yii\bootstrap5\Modal;
use yii\widgets\Pjax;

    echo ListView::widget([
        'dataProvider' => $dataProvider,
        'itemView' => '_devices',
        'options' => [
            'class' => 'list-group list-group-numbered'
        ],
    ]);

