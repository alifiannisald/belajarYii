<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Form User 2.0';
?>

<?php 
	if(Yii::$app->session->hasFlash('success')){
		echo '<div class="alert alert-success">'.Yii::$app->session->getFlash('success').'</div>';
		if($user !=null){
		print_r($user->id_user);
		}
	}  
?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'username'); ?>
<?= $form->field($model,'level'); ?>
<?= $form->field($model,'id_satker'); ?>

<?= Html::submitButton('Search', ['class'=>'btn btn-success']); ?>
<?php ActiveForm::end(); ?>


	<?php

	foreach($users as $user){
		echo 'user : '.$user['id_user']."<hr>";
	}
	?>
