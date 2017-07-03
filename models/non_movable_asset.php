<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\base\Model;
class non_movable_asset extends ActiveRecord {
	public static function non_movable_asset()
    {
        return '{{name_item}}';
    }
    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db;  
    }
}

?>