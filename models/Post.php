<?php
namespace app\models;



use app\models\Category;
use yii\db\ActiveRecord;


Class Post extends ActiveRecord{

    public static function tableName(){


        return 'post';
    }

    public function getCategory(){

        return $this->hasOne(Category::class,['id'=>'category_id']);
    }
}