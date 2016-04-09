<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Position;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    
    <?php
        $position=Position::find()->all();

        $listData=ArrayHelper::map($position,'position_id','position_name');
        echo $form->field($model, 'position_id')->dropDownList($listData,['prompt'=>'Select a Position']);


    ?>

    <?= $form->field($model, 'user_id')->textInput() ?>
     

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
