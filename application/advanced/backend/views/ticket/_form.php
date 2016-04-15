<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\SccCase;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ticketnumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>

    <?= $form->field($model, 't_date_time')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>

    <?php
        $scccase=SccCase::find()->all();

        $listData=ArrayHelper::map($scccase,'case_id','casenumber');
        echo $form->field($model, 'case_id')->dropDownList($listData,['prompt'=>'Select Case', 'style' => 'width: 300px']);


    ?>

    <?= $form->field($model, 'ticket_note')->textarea(['rows' => 6, 'style' => 'width: 300px']) ?>

    <?= $form->field($model, 'ticket_name')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
