<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\Boat;
use backend\models\Caption;
use backend\models\Customer;
/**
 * Site controller
 */
class ListController extends Controller
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
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {

        $this->layout = "@backend/themes/adminlte/layouts/index";
        $boats = Boat::find()->all();
        return $this->render('index',
        [
          'result' => $boats
        ]);


    }


}
