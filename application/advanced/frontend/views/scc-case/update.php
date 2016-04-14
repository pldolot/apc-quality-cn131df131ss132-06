<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SccCase */

$this->title = 'Update Scc Case: ' . ' ' . $model->case_id;
$this->params['breadcrumbs'][] = ['label' => 'Scc Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->case_id, 'url' => ['view', 'id' => $model->case_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="scc-case-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
