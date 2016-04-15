<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TicketHasTicketStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-has-ticket-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ticket_id')->textInput(['maxlength' => true , 'style' => 'width:300px']) ?>

    <?= $form->field($model, 'ticket_status_id')->textInput(['maxlength' => true , 'style' => 'width:300px']) ?>

    <?= $form->field($model, 'employee_id')->textInput(['maxlength' => true , 'style' => 'width:300px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
