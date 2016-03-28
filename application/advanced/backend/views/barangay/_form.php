<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\District;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="barangay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'barangay')->textInput(['maxlength' => true]) ?>

   
     <?php
    	$district=District::find()->all();

    	$listData=ArrayHelper::map($district,'district_id','district_name');
    	echo $form->field($model, 'district_id')->dropDownList($listData,['prompt'=>'Select your District']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
