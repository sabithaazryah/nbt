<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "appointment".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile_no
 * @property int $category
 * @property string $vehicle_manufacturer
 * @property string $vehicle_date
 * @property string $comments
 * @property string $date
 */
class Appointment extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'appointment';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['category'], 'integer'],
                        [['vehicle_date', 'date'], 'safe'],
                        [['comments'], 'string'],
                        [['name', 'email', 'mobile_no', 'vehicle_manufacturer'], 'string', 'max' => 250],
                        [['name', 'email', 'mobile_no'], 'required', 'on' => 'appointment'],
                        [['email'], 'email'],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'name' => 'Name',
                    'email' => 'Email',
                    'mobile_no' => 'Mobile No',
                    'category' => 'Category',
                    'vehicle_manufacturer' => 'Vehicle Manufacturer',
                    'vehicle_date' => 'Vehicle Date',
                    'comments' => 'Comments',
                    'date' => 'Date',
                ];
        }

}
