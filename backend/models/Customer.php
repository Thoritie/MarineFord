<?php

namespace backend\models;

use Yii;

class Customer extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['marineford', 'Customer'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
          '_id',
        	'idcustomer',
          'cusname',
          'cuslastname',
        	'bill',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','idcustomer', 'cusname', 'cuslastname', 'bill'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
