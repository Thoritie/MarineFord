<?php

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use backend\models\Boat;
use backend\models\Caption;
use backend\models\Customer;
use Codeception\Step\Action;
use backend\models\backend\models;

/**
 * LecturerController implements the CRUD actions for Lecturer model.
 */
class CustomerController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [

        ];
    }


    /**
     * Lists all Lecturer models.
     * @return mixed
     */
	 public function actionIndex()
    {
      return [
          'error' => [
              'class' => 'yii\web\ErrorAction',
          ],
      ];
    }
}
