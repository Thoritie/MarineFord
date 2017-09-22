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
      $session = Yii::$app->session;

      if($session->has('user')){
        $user  = $session->get('user');
      }else {
        $user = null;
      }


    	$model = Boat::findOne($id);
    	return $this->render('Reserboat', [
    			 'model' => $model,
           'user' => $user
    	]);
    }

    public function actionSave(){
        $request = Yii::$app->request;
        $session = Yii::$app->session;

        if($session->has('user')){
          $user  = $session->get('user');
        }else {
          $user = null;
        }

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

    public function actionCustomer()
    {
        $request = Yii::$app->request;
        $session = Yii::$app->session;
        $baseUrl = \Yii::getAlias('@web');

        $customer_id = $session->get('user')['_id'];

        $customer = Customer::findOne($customer_id);
        $bill = $customer['bill'] ;

        if($bill==null)
          $bill = array();

          $t = array();
          $billz = Customer::findOne($bill);

          $t['idbill'] = $request->get('idbill',null);
          $t['idboat'] = $request->get('boat_id',null);
          $t['destination'] = $request->get('destination',null);
          $t['rentdate'] = $request->get('rentdate',null);
          $t['backtdate'] = $request->get('backtdate',null);
          $t['status'] = $request->get('status',null);

          array_push($bill,$t);
          $customer->bill = $bill;
          $id = $customer->getPrimaryKey();
          $customer->save();

          return $this->redirect($baseUrl."/list/history");


    }




}
