<?php

namespace backend\models;

use Yii;

class Lecturer extends \yii\mongodb\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function collectionName()
    {
        return ['marineford', 'Caption'];
    }

    /**
     * @inheritdoc
     */
    public function attributes()
    {
        return [
          '_id',
        	'idcaption',
          'namecaption',
          'lastnamecaption',
        	'skill',
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['_id','idcaption', 'namecaption', 'lastnamecaption', 'skill'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
}
