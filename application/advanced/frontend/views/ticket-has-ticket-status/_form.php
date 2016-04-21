<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\TicketStatus;
use common\models\Ticket;
use common\models\Employee;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\TicketHasTicketStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-has-ticket-status-form">

    <?php $form = ActiveForm::begin(); ?>

   

    <?php

		$ticket=Ticket::find()->all();

		$listData=ArrayHelper::map($ticket,'ticket_id','ticketnumber');

		echo $form->field($model, 'ticket_id')->dropDownList($listData,['prompt'=>'Select Ticket Number']);

	?>

    

    <?php

		$ticket_status=TicketStatus::find()->all();

		$listData=ArrayHelper::map($ticket_status,'ticket_status_id','status_name');

		echo $form->field($model, 'ticket_status_id')->dropDownList($listData,['prompt'=>'Select Ticket Status']);

	?>

    
   <?php

		$employee=Employee::find()->all();

		$listData=ArrayHelper::map($employee,'employee_id','firstname','lastname');

		echo $form->field($model, 'employee_id')->dropDownList($listData,['prompt'=>'Select Case Number']);

	?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
