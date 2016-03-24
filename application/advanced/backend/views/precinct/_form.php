<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Precinct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="precinct-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'precinctnumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'school_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
