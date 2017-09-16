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

        $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('index');


    }

    public function actionTestreser()
    {

        $this->layout = "@backend/themes/adminlte/layouts/index";
        return $this->render('testreser');


    }

    public function actionSave(){
    	// $request = Yii::$app->request;
        //
    	// $id = $request->get('id',null);
    	// $name = $request->get('name',null);
    	// $gender = $request->get('gender',null);
    	// $email = $request->get('email',null);
        // $phone_number = $request->get('phone_number',null);
        //
    	// $baseUrl = \Yii::getAlias('@web');
        //
    	// $model;
    	// if($id == null){
    	// 	//create
    	// 	$model = new Lecturer();
    	// }else{
    	// 	//update
    	// 	$model = Lecturer::findOne($id);
    	// }
        //
    	// $model->name = $name;
    	// $model->gender = $gender;
    	// $model->email = $email;
        // $model->phone_number = $phone_number;
    	// if($model->save()){
    	// 	echo "success";
    	// }else{
    	// 	echo "unsuccess";
    	// }
        //
    	// return $this->redirect($baseUrl."/lecturer/index");
    }


}
