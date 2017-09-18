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
        ]);
    }
}
