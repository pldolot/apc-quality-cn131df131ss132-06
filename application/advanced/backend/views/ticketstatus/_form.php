<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TicketStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tstatus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
