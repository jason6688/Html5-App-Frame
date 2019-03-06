<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/2/20 0020
 * Time: 下午 2:18
 */
namespace app\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public $layout = false;
    public function actionIndex()
    {

        return $this->render('index');
    }

}