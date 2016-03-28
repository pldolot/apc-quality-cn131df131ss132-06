<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MunicipalCity */

$this->title = 'Update Municipal City: ' . ' ' . $model->municipality_id;
$this->params['breadcrumbs'][] = ['label' => 'Municipal Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->municipality_id, 'url' => ['view', 'id' => $model->municipality_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="municipal-city-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
