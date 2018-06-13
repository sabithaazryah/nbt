<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "alloy_wheels".
 *
 * @property int $id
 * @property int $brand
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
class AlloyWheels extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alloy_wheels';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand', 'status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['spec_1', 'spec_1_value', 'spec_2', 'spec_2_value', 'image', 'alt_tag'], 'string', 'max' => 250],
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
            'spec_1' => 'Spec 1',
            'spec_1_value' => 'Spec 1 Value',
            'spec_2' => 'Spec 2',
            'spec_2_value' => 'Spec 2 Value',
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
