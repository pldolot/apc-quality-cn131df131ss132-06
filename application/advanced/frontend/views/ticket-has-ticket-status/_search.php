<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TicketHasTicketStatusSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-has-ticket-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ticket_has_ticket_status_id') ?>

    <?= $form->field($model, 'ticket_id') ?>

    <?= $form->field($model, 'ticket_status_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
