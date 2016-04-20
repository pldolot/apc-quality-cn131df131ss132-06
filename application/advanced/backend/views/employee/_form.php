<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Position;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<style type="text/css">
    
    .column1{
        width:350px;
        height:500px;
        position: absolute;
        margin-bottom: 50px;
        padding-left: 10px;
        
    }

    .column2{
        width:350px;
        height:400px;
        position: absolute;
        padding-left:10px;
        margin-left:420px;
        margin-bottom:50px; 
        
    }
    .column3{
        width:350px;
        height:400px;
        position: absolute;
        margin-bottom: 50px;
        padding-left: 10px;
        margin-left: 825px;
    }
    .column4{
        width:350px;
        height:400px;
        position: absolute;
        padding-left:10px;
        margin-left:530px;
        margin-top:290px; 

    }
</style>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>


    
<div class="column1">
    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?php
        $position=Position::find()->all();

        $listData=ArrayHelper::map($position,'position_id','position_name');
        echo $form->field($model, 'position_id')->dropDownList($listData,['prompt'=>'Select Position', 'style' => 'width: 300px']);



    ?>


<div class="column2">
    <?= $form->field($model, 'user_id')->textInput(['style' => 'width: 300px']) ?>
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'employee_status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', ], ['prompt' => 'Select status', 'style' => 'width: 300px']) ?>    
</div>
<div class="column3">
    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select sex', 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    
</div>
    <div class="column4">

        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
