<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PrecinctSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Precincts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precinct-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Precinct', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'precinct_id',
            'precinctnumber',
            'school_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
