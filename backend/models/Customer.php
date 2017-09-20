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
        	'user',
          'password',
          'email',
          'idcard',
          'cusname',
          'cussirname',
        	'bill',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','email', 'cusname', 'idcard', 'bill', 'user','password', 'cussirname'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
