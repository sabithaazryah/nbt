<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "our_products".
 *
 * @property int $id
 * @property string $title_1
 * @property string $image_1
 * @property string $description_1
 * @property string $title_2
 * @property string $image_2
 * @property string $description_2
 * @property string $title_3
 * @property string $image_3
 * @property string $description_3
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class OurProducts extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'our_products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['title_1', 'image_1', 'description_1', 'title_2', 'image_2', 'description_2', 'title_3', 'image_3', 'description_3'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_1' => 'Title 1',
            'image_1' => 'Image 1',
            'description_1' => 'Description 1',
            'title_2' => 'Title 2',
            'image_2' => 'Image 2',
            'description_2' => 'Description 2',
            'title_3' => 'Title 3',
            'image_3' => 'Image 3',
            'description_3' => 'Description 3',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
