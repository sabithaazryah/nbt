<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "batteries".
 *
 * @property int $id
 * @property string $content
 * @property string $specifications
 * @property string $image
 * @property string $image_alt_tag
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Batteries extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'batteries';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'specifications'], 'string'],
            [['CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['image', 'image_alt_tag'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'specifications' => 'Specifications',
            'image' => 'Image',
            'image_alt_tag' => 'Image Alt Tag',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
