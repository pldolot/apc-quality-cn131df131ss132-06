<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Profile;
use common\models\Category;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\SccCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scc-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'casenumber')->textInput(['maxlength' => true]) ?>

    

    

    <?php
    	$profile=Profile::find()->all();

    	$listData=ArrayHelper::map($profile,'profile_id','profile_lastname');
    	echo $form->field($model, 'profile_id')->dropDownList($listData,['prompt'=>'Select Profile', 'style' => 'width: 300px']);


    ?>


    


    <?php
    	$category=Category::find()->all();

    	$listData=ArrayHelper::map($category,'category_id','category_name');
    	echo $form->field($model, 'category_id')->dropDownList($listData,['prompt'=>'Select Category', 'style' => 'width: 300px']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
