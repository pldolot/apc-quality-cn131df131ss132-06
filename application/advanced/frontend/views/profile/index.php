<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registrar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'profile_id',
            'profilenumber',
            'phonenumber',
            'profile_firstname',
            'profile_middlename',
            'profile_lastname',
             'profile_picture',
             'gsis',
             'sss',
             'precinct_id',
            'type_id',
            'employee_id',
            'mothers_maiden_name',
            'sex',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
