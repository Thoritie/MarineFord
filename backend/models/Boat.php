<?php

namespace backend\models;

use Yii;

class Boat extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['marineford', 'Boat'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
          '_id',
          'boat_id',
          'name',
          'type',
          'maxseat',
          'pic',
          'price',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','boat_id', 'name', 'type', 'maxseat','pic','price'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
