<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Region;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Province */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="province-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'province_name')->textInput(['maxlength' => true]) ?>

   
     <?php
    	$region=Region::find()->all();

    	$listData=ArrayHelper::map($region,'region_id','region_name');
    	echo $form->field($model, 'region_id')->dropDownList($listData,['prompt'=>'Select your Region']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
