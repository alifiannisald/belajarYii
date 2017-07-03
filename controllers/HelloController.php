<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
   class HelloController extends Controller { 
      
      public function actionIndex() { 
         $message = "index action of the ExampleController"; 
         return $this->render("index",[ 
            'message' => $message 
         ]); 
      }
      
   
   } 
?>