<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Province;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\MunicipalCity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="municipal-city-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'municipality_name')->textInput(['maxlength' => true]) ?>

    
     <?php
    	$province=Province::find()->all();

    	$listData=ArrayHelper::map($province,'province_id','province_name');
    	echo $form->field($model, 'province_id')->dropDownList($listData,['prompt'=>'Select your Province']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
