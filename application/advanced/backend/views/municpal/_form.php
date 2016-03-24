<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\MunicipalCity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipal-city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'municipality_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'province_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
