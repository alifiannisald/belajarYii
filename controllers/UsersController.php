<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\User2;

class UsersController extends Controller {

	public function actionIndex(){
		$model2=User2::find()->all();
		print_r($model2);
	}
}
