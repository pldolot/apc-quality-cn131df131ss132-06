<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CaseHasCaseStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="case-has-case-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'case_id')->textInput() ?>

    <?= $form->field($model, 'case_status_id')->textInput() ?>

    <?= $form->field($model, 'case_date_time')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
