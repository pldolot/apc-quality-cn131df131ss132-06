<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\modules\users\models\Position;

/* @var $this yii\web\View */
/* @var $model app\modules\users\models\Employee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="employee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'middlename')->textInput(['maxlength' => true]) ?>

    

    <?php

$positions=Position::find()->all();

$listData=ArrayHelper::map($positions,'position_id','position_name');

echo $form->field($model, 'position_name')->dropDownList($listData,['prompt'=>'Select Position']);

?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
