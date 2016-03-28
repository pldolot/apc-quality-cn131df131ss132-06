<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\School;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Precinct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="precinct-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'precinctnumber')->textInput(['maxlength' => true]) ?>

    

     <?php
    	$school=School::find()->all();

    	$listData=ArrayHelper::map($school,'school_id','school_name');
    	echo $form->field($model, 'school_id')->dropDownList($listData,['prompt'=>'Select your School']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
