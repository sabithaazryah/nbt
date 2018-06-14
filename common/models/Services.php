<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $gallery_iamge
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Services extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'services';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['content'], 'string'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU','canonical_name'], 'safe'],
                        [['canonical_name'],'unique'],
                        [['title'], 'string', 'max' => 250],
                        [['gallery_iamge'], 'file', 'extensions' => 'jpeg, jpg, png', 'maxFiles' => 4],
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
                    'gallery_iamge' => 'Gallery Iamge',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
