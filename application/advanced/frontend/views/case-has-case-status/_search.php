<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CaseHasCaseStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="case-has-case-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'case_has_case_status') ?>

    <?= $form->field($model, 'case_id') ?>

    <?= $form->field($model, 'case_status_id') ?>

    <?= $form->field($model, 'case_date_time') ?>

    <?= $form->field($model, 'employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
