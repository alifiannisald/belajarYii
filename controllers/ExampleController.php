<?php 
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\non_movable_usage;
use app\models\non_movable_asset;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\UserForm;
   class ExampleController extends Controller { 
      
      public function actionIndex() { 
         $message = "index action of the ExampleController"; 
         return $this->render("example",[ 
            'message' => $message 
         ]); 
      }
      public function actionKelola() {
         $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('kelola', [
            'model' => $model,
        ]);
        
         $message = "Bismillah Yii in progress";
         return $this->render("kelola",[
            'message' => $message
         ]);
      } 

      public function actionStored($id){
        $id=$_GET['batalkan'];
        if (isset($_GET['batalkan'])) {
        $pinjam = new non_movable_usage();
        $peminjaman = non_movable_usage::findOne($id);
        $peminjaman->level_usage = -1;
        $peminjaman->save();
        }
          $connection = Yii::$app->getDb();
        $peminjaman3 = $connection->createCommand("
            SELECT a.id_non_movable_usage, a.title, b.name_item,  a.id_user, a.set_out, a.estimate, c.name FROM non_movable_usage a, non_movable_asset b, level_usage c WHERE a.id_non_movable = b.id_non_movable AND a.level = c.level and a.id_user='andr002'");

        $peminjaman2 = $peminjaman3->queryAll();

         $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        
         $message = "Bismillah Yii in progress";

         return $this->render('history',['message' => $message, 'modelPinjam'=>$peminjaman2, 'model'=>$model]);

      }
      public function actionHistory() {
        $peminjaman =non_movable_usage::find()
                    ->where(['id_user' => 'fina001'])
                    ->all();;
        $sql = "SELECT a.id_non_movable_usage, a.title, b.name_item,  a.id_user, a.set_out, a.estimate, c.name FROM non_movable_usage a, non_movable_asset b, level_usage c WHERE a.id_non_movable = b.id_non_movable AND a.level = c.level and a.id_user='fina001'";
        $peminjaman4 = non_movable_usage::findBySql($sql)->all();
        

        $connection = Yii::$app->getDb();
        $peminjaman3 = $connection->createCommand("
            SELECT a.id_non_movable_usage, a.title, b.name_item,  a.id_user, a.set_out, a.estimate, c.name FROM non_movable_usage a, non_movable_asset b, level_usage c WHERE a.id_non_movable = b.id_non_movable AND a.level = c.level and a.id_user='andr002'");

        $peminjaman2 = $peminjaman3->queryAll();


        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        
         $message = "Bismillah Yii in progress";

         return $this->render('history',['message' => $message, 'modelPinjam'=>$peminjaman2, 'model'=>$model]);
      } 
   
   } 
?>