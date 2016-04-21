<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Precinct */

$this->title = 'Create Precinct';
$this->params['breadcrumbs'][] = ['label' => 'Precincts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="precinct-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
