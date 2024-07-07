<?php

namespace app\controllers;


use app\models\Category;
use yii\web\Controller;


class CategoryController extends Controller { 
  
    
    public function actionIndex(){
        $posts=Category::find()->all();
        
        return $this->render('index',['posts'=>$posts]);
    }
}

