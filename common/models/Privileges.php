<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "privileges".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $image
 * @property string $image_alt
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Privileges extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'privileges';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['content'], 'string'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU'], 'safe'],
                        [['title', 'image', 'image_alt'], 'string', 'max' => 250],
                        [['title', 'content'], 'required'],
                        [['image'], 'required', 'on' => 'create'],
                        [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'title' => 'Title',
                    'content' => 'Content',
                    'image' => 'Image',
                    'image_alt' => 'Image Alt Tag',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
