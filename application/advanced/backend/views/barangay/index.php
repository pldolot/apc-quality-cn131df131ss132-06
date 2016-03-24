<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\BarangaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Barangays';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Barangay', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'barangay_id',
            'barangay',
            'district_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
