<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "contact_form".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $message
 * @property string $date
 */
class ContactForm extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'contact_form';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['message', 'name', 'email', 'phone', 'website_url'], 'required', 'on' => 'contact-form'],
                        [['message', 'name', 'email', 'phone'], 'required', 'on' => 'enquiry'],
                        [['message', 'name', 'email', 'phone', 'company_name', 'country'], 'required', 'on' => 'portfolio'],
                        [['email'], 'email'],
                        [['message'], 'string'],
                        [['date'], 'safe'],
                        [['portfolio'], 'integer'],
                        [['name', 'email', 'phone'], 'string', 'max' => 100],
                        [['website_url', 'last_name', 'company_name', 'country'], 'string', 'max' => 250],
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
                    'phone' => 'Phone',
                    'message' => 'Message',
                    'date' => 'Date',
                ];
        }

}
