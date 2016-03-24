<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\District */

$this->title = 'Update District: ' . ' ' . $model->district_id;
$this->params['breadcrumbs'][] = ['label' => 'Districts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->district_id, 'url' => ['view', 'id' => $model->district_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="district-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
