<?php

namespace frontend\hellpers;

use common\models\Store;
use yii\helpers\ArrayHelper;

class StoreHelper
{
    public static function getExistingStoreTitles()
    {
        return ArrayHelper::map(Store::find()->all(), 'id', 'title');
    }
}

?>