<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MunicipalCity */

$this->title = $model->municipality_id;
$this->params['breadcrumbs'][] = ['label' => 'Municipal Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-city-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->municipality_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->municipality_id], [
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
            'municipality_id',
            'municipality_name',
            'province_id',
        ],
    ]) ?>

</div>
