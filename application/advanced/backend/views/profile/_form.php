<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Precinct;
use yii\helpers\ArrayHelper;
use common\models\Type;
use common\models\Employee;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">



    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'profile_picture')->textInput() ?>

    <?= $form->field($model, 'profilenumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
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
                width:100px;
                height:70px;
                position:absolute;
                margin-left: 550px;
                margin-top: 250px;
                text-align:left;
                
                
                }

</style>
<div class="column1">
    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_firstname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'profile_middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'mothers_maiden_name')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
</div>

<div class="column2">
    <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?php

        $precinct=Precinct::find()->all();

        $listData=ArrayHelper::map($precinct,'precinct_id','precinctnumber');

        echo $form->field($model, 'precinct_id')->dropDownList($listData,['prompt'=>'Select Precinct', 'style' => 'width: 300px']);


    ?>


    
    <?php

        $employee=Employee::find()->all();

        $listData=ArrayHelper::map($employee,'employee_id','firstname','lastname');

        echo $form->field($model, 'employee_id')->dropDownList($listData,['prompt'=>'Select employee', 'style' => 'width: 300px']);


    ?>
        
</div>
<div class="column4">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<div class="column3">
    <?= $form->field($model, 'gsis')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'sss')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'fingerprintid')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'esignature')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
</div> 
   
    

    <?php ActiveForm::end(); ?>

</div>
