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
          'address',
          'phone',
          'cusname',
        	'bill',
          'idboat',
          'rentdate',
          'backtdate',
          'destination',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','email', 'cusname', 'bill', 'password','phone' ,'address' ,'idboat','rentdate',  'backtdate',  'destination'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
