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
          'password',
          'email',
          'idcard',
          'address',
          'phone',
          'cusname',
        	'bill',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','email', 'cusname', 'idcard', 'bill', 'password','phone' ,'address'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
