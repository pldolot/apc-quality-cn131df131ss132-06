<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\EmployeeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Employee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'employee_id',
            'id_number',
            'firstname',
            'lastname',
            'middlename',
<<<<<<< HEAD

=======
>>>>>>> 2c53e3d85eea73a6b93c549ac06d6696fba3bd97
            'position.position_name',
            'sex',
            'user_id',
            'employee_status',

<<<<<<< HEAD
            // 'position_id',
            // 'sex',
            // 'user_id',
            // 'employee_status',

=======
>>>>>>> 2c53e3d85eea73a6b93c549ac06d6696fba3bd97

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
