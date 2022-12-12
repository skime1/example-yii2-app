<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use frontend\models\Store;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var frontend\models\Device $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="device-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <!-- <?= $form->field($model, 'store_id')->textInput() ?> -->

    <?= Select2::widget([
        'model' => $model,
        'attribute' => 'store_id',
        'data' => ArrayHelper::map(Store::find()->all(), 'id', 'title'),
        'options' => [
            'placeholder' => 'Select a type ...',
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::a('Cancel', ['device/index'], ['class' => 'btn btn-outline-secondary']) ?>

        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
