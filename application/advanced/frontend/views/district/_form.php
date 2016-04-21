<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\MunicipalCity;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\District */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'district_name')->textInput(['maxlength' => true]) ?>

   
     <?php
    	$municipalcity=MunicipalCity::find()->all();

    	$listData=ArrayHelper::map($municipalcity,'municipality_id','municipality_name');
    	echo $form->field($model, 'municipality_id')->dropDownList($listData,['prompt'=>'Select your Municipal/City']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
