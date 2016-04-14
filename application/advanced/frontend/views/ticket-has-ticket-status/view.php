<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TicketHasTicketStatus */

$this->title = $model->ticket_has_ticket_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Has Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-has-ticket-status-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ticket_has_ticket_status_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ticket_has_ticket_status_id], [
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
            'ticket_has_ticket_status_id',
            'ticket_id',
            'ticket_status_id',
            'employee_id',
        ],
    ]) ?>

</div>
