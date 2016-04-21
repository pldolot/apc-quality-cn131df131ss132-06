<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Precinct */

$this->title = 'Update Precinct: ' . ' ' . $model->precinct_id;
$this->params['breadcrumbs'][] = ['label' => 'Precincts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->precinct_id, 'url' => ['view', 'id' => $model->precinct_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="precinct-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
