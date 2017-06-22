<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\UserForm;


class UserController extends Controller {

	public function actionIndex(){
		$users = new User;
		$model = new UserForm;
		$selectAllUser=$users::find()->all();

		$nama="Ann";
        if ($model->load(Yii::$app->request->post())&& $model->validate()) {
            Yii::$app->session->setFlash('success', 'Alhamdulillah bisa');
           $username= Yii::$app->request->post('UserForm')['username'];
           $level= Yii::$app->request->post('UserForm')['level'];
		   $satker= Yii::$app->request->post('UserForm')['id_satker'];

           $iduser = $users::find()->where(['id_user'=>$username])->one();
 
           return $this->render('index',['users'=>$selectAllUser, 'user'=>$iduser, 'model'=>$model]);
        }

		return $this->render('index',['users'=>$selectAllUser, 'nama'=>$nama, 'model'=>$model]);


	}


}
