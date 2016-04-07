<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Position;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

<style type ="text/css">
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
        margin-top:75px;
                
    }
    .column4{
        width:100px;
        height:70px;
        position:absolute;
        margin-left:525px;
        margin-top:200px;
        text-align:left;
    }
</style>
<div class="column1">
    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
</div>
<div class="column2">
    <?php

        $positions=Position::find()->all();

        $listData=ArrayHelper::map($positions,'position_id','position_name');

        echo $form->field($model, 'position_id')->dropDownList($listData,['prompt'=>'Select Position', 'style' => 'width: 300px']);

    ?>
    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
</div>
<div class="column3">
    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true, 'style' => 'width: 300px']) ?>
    </div>

    <div class="column4">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
