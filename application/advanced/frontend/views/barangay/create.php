<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Barangay */

$this->title = 'Create Barangay';
$this->params['breadcrumbs'][] = ['label' => 'Barangays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="barangay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
