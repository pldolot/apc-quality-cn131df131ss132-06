<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Precinct;
use common\models\Type;
use common\models\Employee;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'profilenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phonenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_middlename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mothers_maiden_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_picture')->textInput() ?>

    <?= $form->field($model, 'gsis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sss')->textInput(['maxlength' => true]) ?>

    

    <?php
        $precinct=Precinct::find()->all();

        $listData=ArrayHelper::map($precinct,'precinct_id','precinctnumber');
        echo $form->field($model, 'precinct_id')->dropDownList($listData,['prompt'=>'Select your precinct', 'style' => 'width: 300px']);
    ?>



    <?php
        $type=Type::find()->all();

        $listData=ArrayHelper::map($type,'type_id','type_name');
        echo $form->field($model, 'type_id')->dropDownList($listData,['prompt'=>'Select your position', 'style' => 'width: 300px']);
    ?>


   

    <?php
        $employee=Employee::find()->all();

        $listData=ArrayHelper::map($employee,'employee_id','firstname','lastname');
        echo $form->field($model, 'employee_id')->dropDownList($listData,['prompt'=>'Select employee', 'style' => 'width: 300px']);
    ?>


    

    <?= $form->field($model, 'sex')->dropDownList([ 'Male' => 'Male', 'Female' => 'Female', ], ['prompt' => 'Select your sex']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
