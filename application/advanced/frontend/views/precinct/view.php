<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Precinct */

$this->title = $model->precinct_id;
$this->params['breadcrumbs'][] = ['label' => 'Precincts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precinct-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->precinct_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->precinct_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'precinct_id',
            'precinctnumber',
            'school_id',
        ],
    ]) ?>

</div>
