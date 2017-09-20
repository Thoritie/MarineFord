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
        //Hardcode Id Boat
        $boats = Boat::findOne("59b78ca826ecdff35186e115");

        return $this->render('index',
        [
          'result' => $boats,

        ]);
    }

    public function actionReserboat()
    {
    //   $this->layout = "@backend/themes/adminlte/layouts/index";
    	$request = Yii::$app->request;
    	$id = $request->get('id',null);

    	$model = Boat::findOne($id);
    	return $this->render('Reserboat', [
    			 'model' => $model
    	]);
    }

    public function actionSave(){
        $request = Yii::$app->request;
        // $num = Customer::maximum(
        // [
        //     "column" => "idcustomer",
        // ]
        // );
        // $numbill = Customer::maximum(
        // [
        //     "column" => "bill.idbill",
        // ]
        // );

        // $boats = Boat::findOne($id);

    	$id = $request->get('id',null);
    	$cusname = $request->get('cusname',null);
      $idcard = $request->get('idcard',null);
        $rentdate = $request->get('rentdate',null);
        $backdate = $request->get('backdate',null);
        $destination = $request->get('destination',null);
        $boatid = $request->get('boat_id',null);

    	$baseUrl = \Yii::getAlias('@web');

    	$modelCus;

    	if($id == null){
    		//create
    		$modelCus = new Customer();
    	}else{
    		//update
    		$modelCus = Customer::findOne($id);
    	}

    	// $modelCus->idcustomer = $num+1;
        $modelCus->cusname = $cusname;
        $modelCus->idcard = $idcard;
        $modelCus->bill =[
                'idboat' => $boatid,
                'rentdate' => $rentdate,
                'backtdate' => $backdate,
                'destination' => $destination,
        ];
        // $modelCus->bill->idbill = $numbill+1;
        // $modelCus->bill->['idboat']= $boats->boat_id;
        // $modelCus->bill->['rentdate']= $rentdate;
        // $modelCus->bill->['backtdate']= $backdate;
        // $modelCus->bill->['distance']= $distance;


    	if($modelCus->save()){
    		echo "success";

    	}else{
    		echo "unsuccess";
    	}

    	return $this->redirect($baseUrl."/reser/index");

    }

    // $request = Yii::$app->request;
    //     	$id = $request->get('id',null);
    //
    //     	$model = Course::findOne($id);
    //     	return $this->render('edit',[
    //     		'model' => $model
    //     	]);




}
