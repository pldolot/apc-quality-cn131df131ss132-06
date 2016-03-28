<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CaseStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="case-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cstatus')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
