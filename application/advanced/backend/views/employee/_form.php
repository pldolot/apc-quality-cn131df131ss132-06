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
        width:400px;
        height:300px;
        position:absolute;
        text-align:left;
        
        }
        .column2{
            width:400px;
            height:300px;
            position:absolute;
            padding-left: 10px;
            text-align:left;
            margin-left:400px;
            

            
            }
            .column3{
                width:400px;
                height:300px;
                position:absolute;
                padding-left: 10px;
                text-align:left;
                margin-left:825px;
                
                
                }
                .column4{
            width:400px;
            height:300px;
            position:absolute;
            padding-left: 10px;
            text-align:left;
            margin-left:1060px;
            margin-top: 150px;
                

</style>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="column1">
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    </div>
    <div class="column2">
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true,'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>   
    </div>
    <div class="column3">
    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?php
        $position=Position::find()->all();

        $listData=ArrayHelper::map($position,'position_id','position_name');
        echo $form->field($model, 'position_id')->dropDownList($listData,['prompt'=>'Select a Position','style' => 'width: 300px']);


    ?>
    </div>
    
     

    <div class="column4">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


    </div>
    

