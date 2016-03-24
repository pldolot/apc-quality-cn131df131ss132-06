<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Barangay */

$this->title = 'Update Barangay: ' . ' ' . $model->barangay_id;
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->barangay_id, 'url' => ['view', 'id' => $model->barangay_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="barangay-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
