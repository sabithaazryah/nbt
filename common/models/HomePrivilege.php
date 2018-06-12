<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "home_privilege".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $privilege_1
 * @property string $privilege_2
 * @property string $privilege_3
 * @property string $image
 * @property string $alt_tag
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class HomePrivilege extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'home_privilege';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU', 'content',], 'safe'],
                        [['title', 'privilege_1', 'privilege_2', 'privilege_3', 'image', 'alt_tag'], 'string', 'max' => 250],
                        [['title', 'privilege_1', 'privilege_2', 'privilege_3', 'content'], 'required'],
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
                    'privilege_1' => 'Privilege 1',
                    'privilege_2' => 'Privilege 2',
                    'privilege_3' => 'Privilege 3',
                    'image' => 'Image',
                    'alt_tag' => 'Alt Tag',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
