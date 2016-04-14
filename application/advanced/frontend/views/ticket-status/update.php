<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TicketStatus */

$this->title = 'Update Ticket Status: ' . ' ' . $model->ticket_status_id;
$this->params['breadcrumbs'][] = ['label' => 'Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ticket_status_id, 'url' => ['view', 'id' => $model->ticket_status_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ticket-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
