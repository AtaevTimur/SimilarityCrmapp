<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 05.01.2015
 * Time: 1:25
 */

namespace app\models\customer;
use yii\db\ActiveRecord;

class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id', 'number'],
            ['number', 'string'],
            [['customer_id', 'number'], 'required'],
        ];
    }
} 