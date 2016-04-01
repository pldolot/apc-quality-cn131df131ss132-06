<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Profiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Profile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'profile_id',
            'profilenumber',
            'phonenumber',
            'profile_firstname',
            'profile_middlename',
<<<<<<< HEAD
            // 'mothers_maiden_name',
=======
>>>>>>> 26e3ac6f4276a3253511c5cbf8f01df1e60cd140
            // 'profile_lastname',
            // 'profile_picture',
            // 'gsis',
            // 'sss',
            // 'fingerprintid',
            // 'esignature',
            // 'precinct_id',
            // 'type_id',
            // 'employee_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
