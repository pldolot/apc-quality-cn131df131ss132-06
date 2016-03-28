<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CaseHasCaseStatus */

$this->title = 'Create Case Has Case Status';
$this->params['breadcrumbs'][] = ['label' => 'Case Has Case Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="case-has-case-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
