<?php

namespace frontend\controllers;

use frontend\models\Tasks;
use yii\web\Controller;

class TasksController extends Controller
{
    public function actionIndex()
    {
        $tasks = Tasks::find()->with('category')->where(['status_id' => 1])->orderBy(['created_at' => 'DESC'])->all();
        return $this->render('index', ['tasks' => $tasks]);
    }

//    public function actionShow($id) {
//        var_dump($id);
//    }
}