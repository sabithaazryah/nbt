<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subscribe".
 *
 * @property int $id
 * @property string $email
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Subscribe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscribe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['email'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
