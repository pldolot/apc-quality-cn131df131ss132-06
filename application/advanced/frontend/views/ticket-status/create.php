<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TicketStatus */

$this->title = 'Create Ticket Status';
$this->params['breadcrumbs'][] = ['label' => 'Ticket Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ticket-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
