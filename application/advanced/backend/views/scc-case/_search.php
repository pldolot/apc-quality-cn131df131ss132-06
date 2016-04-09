<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SccCaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scc-case-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'case_id') ?>

    <?= $form->field($model, 'casenumber') ?>

    <?= $form->field($model, 'c_date_time') ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'category_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
