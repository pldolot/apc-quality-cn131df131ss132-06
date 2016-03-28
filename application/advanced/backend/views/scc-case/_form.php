<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Profile;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\SccCase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scc-case-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'casenumber')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_date_time')->textInput(['maxlength' => true]) ?>

   

     <?php

		$profile=Profile::find()->all();

		$listData=ArrayHelper::map($profile,'profile_id','phonenumber');

		echo $form->field($model, 'profile_id')->dropDownList($listData,['prompt'=>'Select Phone Number']);

	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
