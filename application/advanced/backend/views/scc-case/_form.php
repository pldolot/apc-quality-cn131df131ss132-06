<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Category;
use common\models\Issuetype;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\SccCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scc-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'casenumber')->textInput(['maxlength' => true,'style' => 'width: 300px']) ?>

    

    <?= $form->field($model, 'profile_id')->hiddenInput(['value'=>Yii::$app->request->get('id')])->label("") ?>

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
