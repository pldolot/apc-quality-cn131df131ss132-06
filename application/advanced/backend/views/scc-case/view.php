<?php

use yii\helpers\Html;
use yii\widgets\DetailView;



/* @var $this yii\web\View */
/* @var $model common\models\SccCase */

$this->title = $model->casenumber;
$this->params['breadcrumbs'][] = ['label' => 'Scc Cases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scc-case-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->case_id], ['class' => 'btn btn-primary']) ?>
        

        <?= Html::a('Create Ticket', ['ticket/create', 'id' => $model->case_id], ['class' => 'btn btn-success']) ?>
    </p>


    <?= DetailView::widget([
        'model' => $model,
         'attributes' => [
            'case_id',
            'casenumber',
            'c_date_time',
            //'profile.profile_firstname',
            'category.category_name',
        ],
    ]) ?>

   

   
     
   

     
</div>