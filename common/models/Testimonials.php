<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $name
 * @property string $content
 * @property string $image
 * @property int $rating
 * @property string $link
 */
class Testimonials extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'testimonials';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['id', 'rating', 'type', 'marketing'], 'integer'],
                        [['content'], 'string'],
                        [['name', 'image', 'link'], 'string', 'max' => 250],
                        [['CB', 'UB', 'DOC', 'DOU'], 'safe'],
                        [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                        [['name', 'content'], 'required'],
                        [['image'], 'required', 'on' => 'create'],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'name' => 'Name',
                    'content' => 'Content',
                    'image' => 'Image',
                    'rating' => 'Rating',
                    'link' => 'Link (Youtube Iframe Link)',
                ];
        }

}
