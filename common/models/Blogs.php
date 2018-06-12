<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property int $id
 * @property string $title
 * @property string $canonical_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property string $content
 * @property string $blog_date
 * @property string $image
 * @property string $alt_tag
 * @property string $image_title
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Blogs extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'blogs';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['meta_description', 'meta_keyword', 'content'], 'string'],
                        [['blog_date', 'DOC', 'DOU', 'posted_by'], 'safe'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['title', 'canonical_name', 'meta_title', 'alt_tag', 'image_title'], 'string', 'max' => 250],
                        [['image'], 'string', 'max' => 200],
                        [['image'], 'file', 'extensions' => 'jpg, gif, png,jpeg'],
                        [['image'], 'required', 'on' => 'create'],
                        [['content', 'title', 'canonical_name', 'status', 'blog_date'], 'required'],
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
                    'canonical_name' => 'Canonical Name',
                    'meta_title' => 'Meta Title',
                    'meta_description' => 'Meta Description',
                    'meta_keyword' => 'Meta Keyword',
                    'content' => 'Content',
                    'blog_date' => 'Blog Date',
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
