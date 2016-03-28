<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TicketStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ticket Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ticket_status_id',
            'status_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
