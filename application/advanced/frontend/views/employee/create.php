<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Employee;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model common\models\Employee */

$this->title = 'Create Employee';
$this->params['breadcrumbs'][] = ['label' => 'hrmanager', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
