<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brands".
 *
 * @property int $id
 * @property int $type 1=tyre,2=alloy,3=batteries
 * @property string $title
 * @property string $image
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Brands extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'brands';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['type', 'status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU', 'home_page', 'image_alt'], 'safe'],
                        [['title', 'image'], 'string', 'max' => 250],
                        [['title', 'type', 'status'], 'required'],
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
                    'type' => 'Type',
                    'title' => 'Title',
                    'image' => 'Image',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
