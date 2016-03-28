<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TicketHasTicketStatus */

$this->title = 'Create Ticket Has Ticket Status';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Has Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-has-ticket-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
