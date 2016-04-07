<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ProfileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'profile_id') ?>

    <?= $form->field($model, 'profilenumber') ?>

    <?= $form->field($model, 'phonenumber') ?>

    <?= $form->field($model, 'profile_firstname') ?>

    <?= $form->field($model, 'profile_middlename') ?>

    <?php // echo $form->field($model, 'profile_lastname') ?>

    <?php // echo $form->field($model, 'profile_picture') ?>

    <?php // echo $form->field($model, 'gsis') ?>

    <?php // echo $form->field($model, 'sss') ?>

    <?php // echo $form->field($model, 'precinct_id') ?>

    <?php // echo $form->field($model, 'type_id') ?>

    <?php // echo $form->field($model, 'employee_id') ?>

    <?php // echo $form->field($model, 'mothers_maiden_name') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
