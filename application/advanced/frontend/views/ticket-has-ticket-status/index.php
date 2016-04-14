<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TicketHasTicketStatusSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ticket Has Ticket Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-has-ticket-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ticket Has Ticket Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ticket_has_ticket_status_id',
            'ticket_id',
            'ticket_status_id',
            'employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
