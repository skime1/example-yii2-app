<?php

namespace frontend\helpers;

class ContentHelper
{
    const IS_EMPTY_VALUE = 'not available';

    public static function getValueModel($model, string $property)
    {
        return isset($model->$property) ? $model->$property : self::IS_EMPTY_VALUE;
    }

    public static function getValueRelationalModel($model, string $relation, string $property)
    {
        return isset($model->$relation->$property) ? $model->$relation->$property : self::IS_EMPTY_VALUE;
    }
}



/*

    *первая реализация*
    
    public static function getValueModel($model, $property, $relation = null)
    {
        if(isset($relation))
        {
            return isset($model->$relation->$property) ? $model->$relation->$property : 'not available';
        }
        return isset($model->$property) ? $model->$property : 'not available';
    }

*/

?>