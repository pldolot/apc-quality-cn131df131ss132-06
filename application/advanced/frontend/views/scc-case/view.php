<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SccCase */

$this->title = $model->case_id;
$this->params['breadcrumbs'][] = ['label' => 'Scc Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scc-case-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->case_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->case_id], [
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
            'case_id',
            'casenumber',
            'c_date_time',
            'profile_id',
            'category_id',
        ],
    ]) ?>

</div>
