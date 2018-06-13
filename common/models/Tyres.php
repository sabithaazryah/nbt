<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tyres".
 *
 * @property int $id
 * @property int $brand
 * @property int $type
 * @property string $spec_1
 * @property string $spec_1_value
 * @property string $spec_2
 * @property string $spec_2_value
 * @property string $image
 * @property string $alt_tag
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Tyres extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tyres';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand', 'type', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['spec_1', 'spec_1_value', 'spec_2', 'spec_2_value', 'image', 'alt_tag'], 'string', 'max' => 250],
             [['brand', 'type', 'status','spec_1','spec_1_value', 'spec_2', 'spec_2_value'], 'required'],
                        [['image'], 'required', 'on' => 'create'],
                        [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Brand',
            'type' => 'Type',
            'spec_1' => 'Specification 1',
            'spec_1_value' => 'Specification 1 Description',
            'spec_2' => 'Specification 2',
            'spec_2_value' => 'Specification 2 Description',
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
