<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_page".
 *
 * @property int $id
 * @property string $what_we_do
 * @property string $service_1
 * @property string $service_2
 * @property string $service_3
 * @property string $service_4
 * @property string $service_5
 * @property string $service_6
 * @property string $who_we_are
 */
class HomePage extends \yii\db\ActiveRecord {

    /**
     * {@inheritdoc}
     */
    public static function tableName() {
        return 'home_page';
    }

    /**
     * {@inheritdoc}
     */
    public function rules() {
        return [
                [['what_we_do', 'service_1', 'service_2', 'service_3', 'service_4', 'service_5', 'service_6', 'who_we_are'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'what_we_do' => 'What We Do',
            'service_1' => 'WEB DESIGNING & DEVELOPMENT',
            'service_2' => 'DIGITAL MARKETING',
            'service_3' => 'ECOMMERCE PLATFORMS',
            'service_4' => 'MOBILOE APP DEVELOPMENT',
            'service_5' => 'OUR PRODUCTS',
            'service_6' => 'ERP SOLUTIONS',
            'who_we_are' => 'Who We Are',
        ];
    }

}
