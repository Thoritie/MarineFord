<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
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
        // $this->layout = "@backend/themes/adminlte/layouts/index";

        $request = Yii::$app->request;
      	$search = $request->get('search',null);
        $session = Yii::$app->session;


        if($session->has('user')){
          $user  = $session->get('user');
        }else {
          $user = null;
        }

        $query = Boat::find();
        if($search != null){
      		$query->where(["maxseat" => $search]);

      	}
      	$result = $query->all();

        $pagination = new Pagination([
            'defaultPageSize' => 6,
            'totalCount' => $query->count(),
        ]);

        $boats = $query->orderBy('boat_id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index',
        [
          'input' => $search,
          'result' => $boats,
          'pagination' => $pagination,
          'user' => $user,
        ]);
    }
    public function actionHistory(){

    	$request = Yii::$app->request;
    	$search = $request->get('search',null);
      $session = Yii::$app->session;

      if($session->has('user')){
        $user  = $session->get('user');
      }else {
        $user = null;
      }

    	$customer = Customer::findOne($user['_id']);

       	return $this->render('history',
    			[
    				'input' => $search,
    				'result' => $customer,
            'user' => $user
    				//'pagination' => $pagination,

    			]);
    }


    public function actionNew()
    {

                 $request = Yii::$app->request;
              //$search = $request->get('search',null);
                 $session = Yii::$app->session;


                 if($session->has('user')){
                   $user  = $session->get('user');
                 }else {
                   $user = null;
                 }

                 $query = Boat::find();
              	$result = $query->all();

         return $this->render('new',
     			[
                     'result' => $result,

     			]);
    }

    public function actionStatus(){
    	$request =Yii::$app->request;
    	$session = Yii::$app->session;
      $baseUrl=\Yii::getAlias('@web');
      $customer_id = $session->get('user')['_id'];

      $customer = Customer::findOne($customer_id);
      $bill = $customer['bill'] ;

      if($bill==null)
        $bill = array();

        $t = array();
        $billz = Customer::findOne($bill);

        // $t['idbill'] = $request->get('idbill',null);
        // $t['idboat'] = $request->get('boat_id',null);
        // $t['destination'] = $request->get('destination',null);
        // $t['rentdate'] = $request->get('rentdate',null);
        // $t['backtdate'] = $request->get('backtdate',null);
        // $t['status'] = $request->get('status',"ยกเลิกการจอง");
        var_dump($billz);

        // array_push($bill,$t);
        // $customer->bill = $bill;
      //  $customer->save();
       //
      //  return $this->redirect($baseUrl."/list/history");

    }
}
