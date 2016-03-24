<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barangay')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'district_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
