<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SccCaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agent';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scc-case-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Scc Case', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute'=>'profile_id', 'value'=>'profile.profile_firstname',

            ],
            

            'case_id',
            'casenumber',
            'c_date_time',
            
            'category_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    

</div>
