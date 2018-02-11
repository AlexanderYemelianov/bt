<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "addresses".
 *
 * @property string $id
 * @property string $user_id
 * @property string $post
 * @property string $country_code
 * @property string $city
 * @property string $street
 * @property string $building_number
 * @property int $flat_number
 */
class Addresses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'addresses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'country_code', 'city', 'street', 'building_number'], 'required'],
            [['user_id', 'flat_number'], 'integer'],
            [['post'], 'string', 'max' => 10],
            [['country_code'], 'string', 'max' => 2],
            [['city'], 'string', 'max' => 30],
            [['street'], 'string', 'max' => 50],
            [['building_number'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'post' => 'Post',
            'country_code' => 'Country Code',
            'city' => 'City',
            'street' => 'Street',
            'building_number' => 'Building Number',
            'flat_number' => 'Flat Number',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
