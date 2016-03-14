<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SccCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scc-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'casenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_date_time')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_profile_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
