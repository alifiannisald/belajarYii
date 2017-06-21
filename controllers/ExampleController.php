<?php 
   namespace app\controllers; 
   use yii\web\Controller; 

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
        return $this->render('contact', [
            'model' => $model,
        ]);
        
         $message = "Bismillah Yii in progress";
         return $this->render("kelola",[
            'message' => $message
         ]);
      } 
   
   } 
?>