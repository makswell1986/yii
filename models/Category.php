<?php
namespace app\models;

use app\models\Post;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName(){

        return 'category';
    }

    public function getPost(){

        return $this->hasMany(Post::class,['id_category'=>'id']);
    }

}
