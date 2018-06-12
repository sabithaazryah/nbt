<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $heading
 * @property string $content
 * @property string $image
 * @property string $we_provide
 * @property string $canonical_name
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keyword
 * @property int $status
 * @property int $CB
 * @property int $UB
 * @property string $DOC
 * @property string $DOU
 */
class Services extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content', 'we_provide', 'meta_description', 'meta_keyword'], 'string'],
            [['status', 'CB', 'UB'], 'integer'],
            [['DOC', 'DOU','alt_tag'], 'safe'],
            [['heading', 'image'], 'string', 'max' => 200],
            [['canonical_name', 'meta_title'], 'string', 'max' => 250],
//            [['heading','canonical_name','content', 'we_provide'],'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'heading' => 'Service',
            'content' => 'Content',
            'image' => 'Image',
            'we_provide' => 'We Provide',
            'canonical_name' => 'Canonical Name',
            'meta_title' => 'Meta Title',
            'meta_description' => 'Meta Description',
            'meta_keyword' => 'Meta Keyword',
            'status' => 'Status',
            'CB' => 'Cb',
            'UB' => 'Ub',
            'DOC' => 'Doc',
            'DOU' => 'Dou',
        ];
    }
}
