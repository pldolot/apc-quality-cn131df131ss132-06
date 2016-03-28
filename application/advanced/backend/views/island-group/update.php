<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\IslandGroup */

$this->title = 'Update Island Group: ' . ' ' . $model->island_id;
$this->params['breadcrumbs'][] = ['label' => 'Island Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->island_id, 'url' => ['view', 'id' => $model->island_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="island-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
