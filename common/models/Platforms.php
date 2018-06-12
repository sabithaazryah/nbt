<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "platforms".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $small_image
 * @property string $image
 * @property string $canonical_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Platforms extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'platforms';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['content', 'meta_description', 'meta_keyword'], 'string'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU'], 'safe'],
                        [['title', 'canonical_name', 'meta_title'], 'string', 'max' => 250],
                        [['small_image', 'image'], 'string', 'max' => 200],
                        [['image', 'small_image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                        [['image', 'small_image'], 'required', 'on' => 'create'],
                        [['content', 'title', 'canonical_name', 'status'], 'required'],
                        [['canonical_name'], 'unique'],
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
                    'small_image' => 'Small Image',
                    'image' => 'Image',
                    'canonical_name' => 'Canonical Name',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keyword' => 'Meta Keyword',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
