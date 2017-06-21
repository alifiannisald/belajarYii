<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;

$this->title = 'Kelola User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-kelola">
    <h1><?= Html::encode($this->title) ?></h1>

        <!-- BEGIN Portlet PORTLET-->
                <div class="portlet">
                    <div class="actions">
                            <a href="/buatuser" class="btn" >
                                Buat Role User 
                                <i class="glyphicon glyphicon-chevron-right"></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
                <!-- END Portlet PORTLET-->

                
        <div class="row">
                <div class = "search">
                   <div id ="advanced">

                    </div>
                   <div class="action-two">
                        <a id="myButton" onclick="advanced()" class="btn" >
                            Advanced Search 
                        </a>
                    </div>
                </div>
            <div class="col-lg-5">
             
            </div>
        </div>

</div>

<script>
        $(document).ready(function () {
        function advanced() {
            var id = ".search #advanced";
            var advancedsearch = 'Isi';
            $(id).html(advanced);
        }
        });
        
    </script>
