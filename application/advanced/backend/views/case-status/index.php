<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CaseStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Case Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="case-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Case Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'case_status_id',
            'cstatus',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
