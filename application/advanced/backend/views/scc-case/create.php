<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SccCase */

$this->title = 'Create Scc Case';
$this->params['breadcrumbs'][] = ['label' => 'Scc Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scc-case-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
