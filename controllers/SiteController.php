<?php
namespace app\controllers;

use yii\rest\Controller;

class SiteController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return [
            'api'=>'Yii2 Micro Services',
            'version'=>'2.0',
            'date'=>date('d/m/Y H:i:s'),
            'online'=>true,
        ];
    }
}

