<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $small_content
 * @property string $detailed_content
 * @property string $customer_support
 * @property string $customer_support_detail
 * @property string $customer_support_no
 * @property string $caption_1
 * @property string $caption_1_detail
 * @property string $caption_2
 * @property string $caption_2_detail
 * @property string $caption_3
 * @property string $caption_3_detail
 * @property string $caption_4
 * @property string $caption_4_detail
 * @property string $caption_5
 * @property string $caption_5_detail
 * @property string $caption_6
 * @property string $caption_6_detail
 * @property string $about_image
 * @property string $about_image_alt
 */
class About extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'about';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['detailed_content'], 'string'],
                        [['small_content', 'customer_support', 'customer_support_detail', 'customer_support_no', 'caption_1', 'caption_1_detail', 'caption_2', 'caption_2_detail', 'caption_3', 'caption_3_detail', 'caption_4', 'caption_4_detail', 'caption_5', 'caption_5_detail', 'caption_6', 'caption_6_detail', 'about_image', 'about_image_alt'], 'string', 'max' => 250],
                        [['working_time'], 'safe']
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'small_content' => 'Small Content',
                    'detailed_content' => 'Detailed Content',
                    'customer_support' => 'Customer Support',
                    'customer_support_detail' => 'Customer Support Detail',
                    'customer_support_no' => 'Customer Support No',
                    'caption_1' => 'Caption 1',
                    'caption_1_detail' => 'Caption 1 Detail',
                    'caption_2' => 'Caption 2',
                    'caption_2_detail' => 'Caption 2 Detail',
                    'caption_3' => 'Caption 3',
                    'caption_3_detail' => 'Caption 3 Detail',
                    'caption_4' => 'Caption 4',
                    'caption_4_detail' => 'Caption 4 Detail',
                    'caption_5' => 'Caption 5',
                    'caption_5_detail' => 'Caption 5 Detail',
                    'caption_6' => 'Caption 6',
                    'caption_6_detail' => 'Caption 6 Detail',
                    'about_image' => 'About Image',
                    'about_image_alt' => 'About Image Alt',
                ];
        }

}
