<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_history".
 *
 * @property int $id
 * @property string $year
 * @property string $event
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $image_alt_tag
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class AboutHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU'], 'safe'],
            [['year', 'event', 'title', 'image', 'image_alt_tag'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'event' => 'Event',
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
            'image_alt_tag' => 'Image Alt Tag',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
