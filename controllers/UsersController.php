<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Users;

class UsersController extends Controller {

	public function actionIndex(){
		$model2=Users::find()->all();
		echo $model2->email;
	}
}
