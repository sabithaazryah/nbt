<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "offers".
 *
 * @property int $id
 * @property string $title
 * @property int $off
 * @property string $image
 * @property string $alt_tag
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Offers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['off', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title', 'image', 'alt_tag'], 'string', 'max' => 250],
                [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                        [['image'], 'required', 'on' => 'create'],
                        [['title', 'off', 'status'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'off' => 'Off',
            'image' => 'Image',
            'alt_tag' => 'Alt Tag',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
