<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Barangay;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\School */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="school-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'school_name')->textInput(['maxlength' => true]) ?>


     <?php
    	$barangay=Barangay::find()->all();

    	$listData=ArrayHelper::map($barangay,'barangay_id','barangay');
    	echo $form->field($model, 'barangay_id')->dropDownList($listData,['prompt'=>'Select your Barangay']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
