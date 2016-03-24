<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\IslandGroup */

$this->title = $model->island_id;
$this->params['breadcrumbs'][] = ['label' => 'Island Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="island-group-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->island_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->island_id], [
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
            'island_id',
            'island_name',
        ],
    ]) ?>

</div>
