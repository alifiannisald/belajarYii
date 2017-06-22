<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\base\Model;
class User extends ActiveRecord {
	public static function user()
    {
        return '{{email}}';
    }
    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db;  
    }
}

?>