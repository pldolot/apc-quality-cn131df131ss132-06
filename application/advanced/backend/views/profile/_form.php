<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profilenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_maiden_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_picture')->textInput() ?>

    <?= $form->field($model, 'gsis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fingerprintid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esignature')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'precinct_id')->textInput() ?>

    <?= $form->field($model, 'type_id')->textInput() ?>

    <?= $form->field($model, 'employee_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
