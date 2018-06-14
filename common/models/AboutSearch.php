<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\About;

/**
 * AboutSearch represents the model behind the search form about `common\models\About`.
 */
class AboutSearch extends About
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['small_content', 'detailed_content', 'customer_support', 'customer_support_detail', 'customer_support_no', 'caption_1', 'caption_1_detail', 'caption_2', 'caption_2_detail', 'caption_3', 'caption_3_detail', 'caption_4', 'caption_4_detail', 'caption_5', 'caption_5_detail', 'caption_6', 'caption_6_detail', 'about_image', 'about_image_alt'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = About::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'small_content', $this->small_content])
            ->andFilterWhere(['like', 'detailed_content', $this->detailed_content])
            ->andFilterWhere(['like', 'customer_support', $this->customer_support])
            ->andFilterWhere(['like', 'customer_support_detail', $this->customer_support_detail])
            ->andFilterWhere(['like', 'customer_support_no', $this->customer_support_no])
            ->andFilterWhere(['like', 'caption_1', $this->caption_1])
            ->andFilterWhere(['like', 'caption_1_detail', $this->caption_1_detail])
            ->andFilterWhere(['like', 'caption_2', $this->caption_2])
            ->andFilterWhere(['like', 'caption_2_detail', $this->caption_2_detail])
            ->andFilterWhere(['like', 'caption_3', $this->caption_3])
            ->andFilterWhere(['like', 'caption_3_detail', $this->caption_3_detail])
            ->andFilterWhere(['like', 'caption_4', $this->caption_4])
            ->andFilterWhere(['like', 'caption_4_detail', $this->caption_4_detail])
            ->andFilterWhere(['like', 'caption_5', $this->caption_5])
            ->andFilterWhere(['like', 'caption_5_detail', $this->caption_5_detail])
            ->andFilterWhere(['like', 'caption_6', $this->caption_6])
            ->andFilterWhere(['like', 'caption_6_detail', $this->caption_6_detail])
            ->andFilterWhere(['like', 'about_image', $this->about_image])
            ->andFilterWhere(['like', 'about_image_alt', $this->about_image_alt]);

        return $dataProvider;
    }
}
