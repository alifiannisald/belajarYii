<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\Button;

$this->title = 'History Peminjaman User';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-history">
    <h1><?= Html::encode($this->title) ?></h1>

                
        <div class="row">
               
            <div class="col-lg-5">
             
            </div>

        </div>
        <div class="row">

                <table id="history-peminjaman" class="table table-striped table-bordered table-hover"
                       style=" margin: auto;">
                    <thead>
                    <tr>
                        <th><input type="checkbox" id="checkBoxAll"></th>
                        <th>Judul Rapat</th>
                        <th>Nama Ruangan</th>
                        <th>Peminjam</th>
                        <th>Mulai</th>
                        <th>Akhir</th>
                        <th>Keterangan</th>
                        <th>Tindakan</th>

                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                                <td><input type="checkbox" class="chkCheckBoxId" value="2"></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="col-xs-10">
                                        <input class="form-inline" id="peminjam" type="text">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-xs-10">
                                        <input class="form-inline" id="mulai" type="text">
                                    </div>
                                </td>
                                <td>
                                    <div class="col-xs-10">
                                        <input class="form-inline" id="akhir" type="text">
                                    </div>
                                </td>
                                <td></td>
                                <td>
                                </td>
                                
                        </tr>
                        
                            <?php
                                foreach($modelPinjam as $pinjam){
                                    echo '<tr>';
                                    echo '<td><input type="checkbox" class="chkCheckBoxId" value="2"></td>';
                                    echo '<td>'.$pinjam['title']."</td>";
                                    echo '<td>'.$pinjam['name_item']."</td>";
                                    echo '<td>'.$pinjam['id_user']."</td>";
                                    echo '<td>'.$pinjam['set_out']."</td>";
                                    echo '<td>'.$pinjam['estimate']."</td>";
                                    echo '<td>'.$pinjam['name']."</td>";
                                    echo '<td>'.Html::button('Lihat', [ 'class' => 'btn btn-primary', 'onclick' => '(function ( $event ) { alert("Sabar ya~~`"); })();' ])."  ".Html::submitButton('Batalkan',[ 'name'=>'batalkan','onclick' => ['model/action'], 'value' => $pinjam['id_non_movable_usage'], 'class' => 'btn btn-default','data-pjax' => 0])."</td>";
                                    echo '</tr>';
                            }
                            //kalo dibatalin, konfirmasi dulu>kalo ya, level_usage di non_movable_usage nya jadi -1
                        ?>

                    </tbody>
                </table>
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
