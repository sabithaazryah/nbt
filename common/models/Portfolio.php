<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "portfolio".
 *
 * @property int $id
 * @property int $type 1=web design,2=branding design,3=brouchure design,4=social media
 * @property string $name
 * @property string $canonical_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $country
 * @property string $description
 * @property string $project_type
 * @property string $technologies_used
 * @property string $link
 * @property string $image
 * @property string $alt_tag
 * @property string $image_title
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Portfolio extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'portfolio';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['type', 'status', 'CB', 'UB', 'page', 'service'], 'integer'],
                        [['meta_description', 'meta_keyword', 'description', 'technologies_used'], 'string'],
                        [['DOC', 'DOU'], 'safe'],
                        [['name', 'canonical_name', 'meta_title', 'country', 'project_type', 'link', 'image', 'alt_tag', 'image_title', 'small_image', 'small_image_alt'], 'string', 'max' => 250],
                        [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                        [['image'], 'required', 'on' => 'create'],
                        [['description', 'name', 'canonical_name', 'status', 'technologies_used', 'project_type'], 'required'],
                        [['canonical_name'], 'unique'],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'type' => 'Type',
                    'name' => 'Name',
                    'canonical_name' => 'Canonical Name',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keyword' => 'Meta Keyword',
                    'country' => 'Country',
                    'description' => 'Description',
                    'project_type' => 'Project Type',
                    'technologies_used' => 'Technologies Used',
                    'link' => 'Link',
                    'image' => 'Image',
                    'alt_tag' => 'Alt Tag',
                    'image_title' => 'Image Title',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
