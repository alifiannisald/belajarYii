<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\base\Model;
class level_usage extends ActiveRecord {
	public static function level_usage()
    {
        return '{{name}}';
    }
    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db;  
    }
}

?>