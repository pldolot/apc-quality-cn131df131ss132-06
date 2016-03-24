<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\MunicipalCitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Municipal Cities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-city-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Municipal City', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'municipality_id',
            'municipality_name',
            'province_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
