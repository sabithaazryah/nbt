<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "brochures".
 *
 * @property int $id
 * @property string $brochure
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Brochures extends \yii\db\ActiveRecord {

        /**
         * {@inheritdoc}
         */
        public static function tableName() {
                return 'brochures';
        }

        /**
         * {@inheritdoc}
         */
        public function rules() {
                return [
                        [['status', 'CB', 'UB'], 'integer'],
                        [['DOC', 'DOU','name'], 'safe'],
                        [['brochure'], 'string', 'max' => 250],
                        [['brochure'], 'file', 'extensions' => 'pdf'],
                        [['brochure', 'status'], 'required']
                ];
        }

        /**
         * {@inheritdoc}
         */
        public function attributeLabels() {
                return [
                    'id' => 'ID',
                    'brochure' => 'Brochure',
                    'status' => 'Status',
                    'CB' => 'Cb',
                    'UB' => 'Ub',
                    'DOC' => 'Doc',
                    'DOU' => 'Dou',
                ];
        }

}
