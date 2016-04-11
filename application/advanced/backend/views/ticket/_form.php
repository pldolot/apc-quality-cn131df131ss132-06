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

    <?= $form->field($model, 'ticketnumber')->textInput(['maxlength' => true]) ?>

   

    
    <?php

		$case=SccCase::find()->all();

		$listData=ArrayHelper::map($case,'case_id','casenumber');

		echo $form->field($model, 'case_id')->dropDownList($listData,['prompt'=>'Select Case Number']);

	?>

    <?= $form->field($model, 'ticket_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
