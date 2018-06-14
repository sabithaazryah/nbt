<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_address".
 *
 * @property int $id
 * @property string $phone1
 * @property string $phone2
 * @property string $email
 * @property string $address
 * @property string $map
 * @property string $get_in_touch
 * @property string $map_link
 * @property string $facebook
 * @property string $twitter
 * @property string $google_plus
 * @property string $instagram
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class ContactAddress extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact_address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['get_in_touch'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['phone1', 'phone2'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 100],
            [['address', 'map', 'map_link', 'facebook', 'twitter', 'google_plus', 'instagram'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone1' => 'Phone1',
            'phone2' => 'Phone2',
            'email' => 'Email',
            'address' => 'Address',
            'map' => 'Map',
            'get_in_touch' => 'Get In Touch',
            'map_link' => 'Map Link',
            'facebook' => 'Facebook',
            'twitter' => 'Twitter',
            'google_plus' => 'Google Plus',
            'instagram' => 'LineedIn',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
