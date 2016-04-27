<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Employee;
use common\models\Type;
use common\models\Precinct;
use yii\helpers\ArrayHelper;

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

   
    
    

    
<div class="column1">
    <?php $form = ActiveForm::begin(['options' => ['entype'=> 'multipart/form-data']]); ?>
    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_firstname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'file')->fileInput(); ?>
    

</div>
<div class="column2">
    <?= $form->field($model, 'profilenumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    
    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select your sex', 'style' => 'width: 300px']) ?>
    
    <?php
        $type=Type::find()->all();

        $listData=ArrayHelper::map($type,'type_id','type_name');
        echo $form->field($model, 'type_id')->dropDownList($listData,['prompt'=>'Select position', 'style' => 'width: 300px']);


    ?>
    
    <?php
        $precinct=Precinct::find()->all();

        $listData=ArrayHelper::map($precinct,'precinct_id','precinctnumber');
        echo $form->field($model, 'precinct_id')->dropDownList($listData,['prompt'=>'Select your precinct', 'style' => 'width: 300px']);


    ?>
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
