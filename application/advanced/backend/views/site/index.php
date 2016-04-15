<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'home';
?>

<style type="text/css">
	.welcome{
		font-size: 100px;
		margin-top: 0px;
	}
	.support{
		font-size: 50px;
		margin-top:0px;
	}
	.logo{
		width:200px;
        height:300px;
 		position:absolute;
		padding-left: 10px;
		text-align:left;
        margin-right:825px;

	}
</style>

<div class="logo">
<?= Html::img('images/logo.jpg');?>
</div>

<div class="welcome">
<h1><center> Welcome to</h1>           
</center></div>

<div class="support">
<h1><center> Support and Command Center</h1>           
</center></div>
