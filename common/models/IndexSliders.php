<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "index_sliders".
 *
 * @property integer $id
 * @property string $image
 * @property string $title
 * @property integer $status
 * @property integer $CB
 * @property integer $UB
 * @property string $DOC
 * @property string $DOU
 */
class IndexSliders extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'index_sliders';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
                [['status', 'CB', 'UB'], 'integer'],
                [['DOC', 'DOU'], 'safe'],
                [['image'], 'string', 'max' => 200],
                [['title','sub_title','alt_tag'], 'string', 'max' => 100],
                [['image'], 'required', 'on' => 'create'],
                [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'title' => 'Title',
            'description' => 'Description',
            'link' => 'Link',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }

}
