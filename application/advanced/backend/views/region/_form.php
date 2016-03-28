<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\IslandGroup;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'region_name')->textInput(['maxlength' => true]) ?>

    

    <?php
    	$islandgroup=IslandGroup::find()->all();

    	$listData=ArrayHelper::map($islandgroup,'island_id','island_name');
    	echo $form->field($model, 'island_id')->dropDownList($listData,['prompt'=>'Select Island where you belong']);


    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
