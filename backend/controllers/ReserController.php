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
class ReserController extends Controller
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

        $show = Boat::findOne("59b78ca826ecdff35186e115");

        // echo $show->name;

        // $request = Yii::$app->request;
        // $idboat = $request->get('idboat',null);
        //
        // $query = Boat::findOne($idboat);
        // $query->where(["boat_id" => $idboat]);
        // $result = $query->all();
        //
        // $this->layout = "@backend/themes/adminlte/layouts/index";
        // return $this->render('Index',[
     // 		'query' => $query
     // 	]);


        $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('index');


    }

    public function actionTestreser()
    {

        $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('testreser');


    }

    public function actionSave(){

    }


}
