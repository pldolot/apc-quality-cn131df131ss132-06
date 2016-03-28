<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\IslandGroup */

$this->title = 'Create Island Group';
$this->params['breadcrumbs'][] = ['label' => 'Island Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="island-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
