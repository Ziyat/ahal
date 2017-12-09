<?php

namespace app\modules\admin\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;

class AppAdminController extends Controller
{
    public function behaviors()
    {
        $this->layout = "@app/modules/admin/views/layouts/main";
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
}