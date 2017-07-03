<?php 
use app\components\ButtonWidget;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Button;
use yii\bootstrap\Progress; 
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
<?php 
echo Html::button('Button 3', [ 'class' => 'btn btn-primary', 'onclick' => '(function ( $event ) { alert("Button 3 clicked"); })();' ]);

?>

<?= ButtonWidget::widget(['message' => 'Annyeong!']) ?>
<?= Progress::widget(['percent' => 60, 'label' => 'Progress 60%']) ?>
<?php $form = ActiveForm::begin([
    'layout' => 'inline',
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'offset' => 'col-sm-offset-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
]); ?>
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
