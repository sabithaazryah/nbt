<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_page_other".
 *
 * @property int $id
 * @property string $banner_label
 * @property string $welcome_note
 * @property string $small_content
 * @property string $detail_content
 * @property string $caption_1
 * @property string $caption_1_detail
 * @property string $caption_2
 * @property string $caption_2_detail
 * @property string $caption_3
 * @property string $caption_3_detail
 * @property string $footer_content
 */
class HomePageOther extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'home_page_other';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['footer_content'], 'string'],
            [['banner_label', 'welcome_note', 'small_content', 'detail_content', 'caption_1', 'caption_1_detail', 'caption_2', 'caption_2_detail', 'caption_3', 'caption_3_detail'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banner_label' => 'Banner Label',
            'welcome_note' => 'Welcome Note',
            'small_content' => 'Small Content',
            'detail_content' => 'Detail Content',
            'caption_1' => 'Caption 1',
            'caption_1_detail' => 'Caption 1 Detail',
            'caption_2' => 'Caption 2',
            'caption_2_detail' => 'Caption 2 Detail',
            'caption_3' => 'Caption 3',
            'caption_3_detail' => 'Caption 3 Detail',
            'footer_content' => 'Footer Content',
        ];
    }
}
