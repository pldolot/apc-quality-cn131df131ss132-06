<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
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

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'profile_picture')->textInput(['maxlength' => true, 'style' => 'width: 300px' ]) ?>
<div class="column1">
    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_firstname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select your sex', 'style' => 'width: 300px']) ?>

</div>
<div class="column2">
    <?= $form->field($model, 'profilenumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'employee_id')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'type_id')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'precinct_id')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
</div>
<div class="column3">
    <?= $form->field($model, 'mothers_maiden_name')->textInput(['maxlength' => true, 'style' => 'width: 300px' ]) ?>    
    <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true,'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'gsis')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'sss')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    
</div>
<div class="column4">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

    <?php ActiveForm::end(); ?>
</div>    

    


</div>
