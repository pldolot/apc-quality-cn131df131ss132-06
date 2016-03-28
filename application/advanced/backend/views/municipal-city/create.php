<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MunicipalCity */

$this->title = 'Create Municipal City';
$this->params['breadcrumbs'][] = ['label' => 'Municipal Cities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="municipal-city-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
