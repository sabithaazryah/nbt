<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $image
 * @property string $content
 * @property string $work_cycle
 * @property string $work_cycle_1
 * @property string $work_cycle_1_content
 * @property string $work_cycle_2
 * @property string $work_cycle_2_content
 * @property string $work_cycle_3
 * @property string $work_cycle_3_content
 * @property string $work_cycle_4
 * @property string $work_cycle_4_content
 * @property string $work_cycle_5
 * @property string $work_cycle_5_content
 * @property string $work_cycle_6
 * @property string $work_cycle_6_content
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
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
                        [['content', 'work_cycle', 'work_cycle_1_content', 'work_cycle_2_content', 'work_cycle_3_content', 'work_cycle_4_content', 'work_cycle_5_content', 'work_cycle_6_content'], 'string'],
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU'], 'safe'],
                        [['image'], 'string', 'max' => 100],
                        [['work_cycle_1', 'work_cycle_2', 'work_cycle_3', 'work_cycle_4', 'work_cycle_5', 'work_cycle_6'], 'string', 'max' => 250],
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'image' => 'Image',
                    'content' => 'About Content',
                    'work_cycle' => 'Work Cycle',
                    'work_cycle_1' => 'Work Cycle 1',
                    'work_cycle_1_content' => 'Content',
                    'work_cycle_2' => 'Work Cycle 2',
                    'work_cycle_2_content' => 'Content',
                    'work_cycle_3' => 'Work Cycle 3',
                    'work_cycle_3_content' => 'Content',
                    'work_cycle_4' => 'Work Cycle 4',
                    'work_cycle_4_content' => 'Content',
                    'work_cycle_5' => 'Work Cycle 5',
                    'work_cycle_5_content' => 'Content',
                    'work_cycle_6' => 'Work Cycle 6',
                    'work_cycle_6_content' => 'Content',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
