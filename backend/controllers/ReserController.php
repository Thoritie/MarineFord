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
        $bill_json = $request->post('bill',null);
        $bills =  json_decode($bill_json);


        $customer = new Customer();
        $customer->cusname = Yii::$app->session->get('user')['_id'];
        $b = array();
        foreach ($bills as $bill) {
          $t = array();
          $billz = Customer::findOne($bill);
          //วันที่คืน
          $t['idboat'] = $billz['idboat'];
          //ราคาที่ซื้อตอนนั้น
          $t['destination'] = $billz['destination'];
          //ราคาทีี่ปลับตอนนั้น
          $t['rentdate'] = $billz['rentdate'];
          //สถานะ กำลังจัดส่ง
          $t['backtdate'] = $billz['backtdate'];
          // echo date('d/m/y h:i:s', $end_date)." ";
          array_push($b,$t);
        }
        $customer->bill = $b;
        echo $customer->save();
    }




}
