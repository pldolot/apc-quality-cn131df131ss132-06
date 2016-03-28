<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CaseStatus */

$this->title = 'Update Case Status: ' . ' ' . $model->case_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Case Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->case_status_id, 'url' => ['view', 'id' => $model->case_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="case-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
