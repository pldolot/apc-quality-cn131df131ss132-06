<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Precinct;
use common\models\Type;
use common\models\Barangay;
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

    <?= $form->field($model, 'profile_lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'profile_picture')->textInput() ?>

    <?= $form->field($model, 'gsis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sss')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fingerprintid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esignature')->textInput(['maxlength' => true]) ?>


    <?php

        $precinct=Precinct::find()->all();

        $listData=ArrayHelper::map($precinct,'precinct_id','precinctnumber');

        echo $form->field($model, 'precinct_id')->dropDownList($listData,['prompt'=>'Select Precicnt']);

    ?>
    <?php

        $type=Type::find()->all();

        $listData=ArrayHelper::map($type,'type_id','type_name');

        echo $form->field($model, 'type_id')->dropDownList($listData,['prompt'=>'Select Profile Type']);

    ?>
    <!-- Create school -->

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($school, 'school_name')->textInput(['maxlength' => true]) ?>
    


     <?php
        $barangay=Barangay::find()->all();

        $listData=ArrayHelper::map($barangay,'barangay_id','barangay');
        echo $form->field($school, 'barangay_id')->dropDownList($listData,['prompt'=>'Select your Barangay']);


    ?>

    

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
