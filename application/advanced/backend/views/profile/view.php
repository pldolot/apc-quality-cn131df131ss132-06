<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profile */

$this->title = $model->profile_id;
$this->params['breadcrumbs'][] = ['label' => 'Profiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->profile_id], ['class' => 'btn btn-primary']) ?>
    
        <?= Html::a('Create Case', ['scc-case/create', 'id' => $model->profile_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'profile_id',
            'profilenumber',
            'phonenumber',
            'profile_firstname',
            'profile_middlename',
            'profile_lastname',
            //'profile_picture',
            'gsis',
            'sss',
            'precinct.precinctnumber',
            'type.type_name',
            'employee.firstname',
            'mothers_maiden_name',
            'sex',
        ],
    ]) ?>

</div>
