<?php

namespace app\controllers;

use app\models\Post;

use yii\web\Controller;
use yii\data\Pagination;


class PostController extends Controller { 
  
    
    public function actionIndex(){
        //$posts=Post::find()->all();
        $query=Post::find()->with('category');
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>4,'forcePageParam'=>false,'pageSizeParam'=>false]);
        $posts=$query->offset($pages->offset)->limit($pages->limit)->all();
        



        return $this->render('index',['posts'=>$posts,'pages'=>$pages]);
    }


    public function actionView($id){


        var_dump($id);
    }
}

