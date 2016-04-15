<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ticketnumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'ticket_name')->textInput(['maxlength' => true, 'maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'case_id')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'ticket_note')->textarea(['rows' => 6 , 'maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 't_date_time')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
