<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomePageOther;

/**
 * HomePageOtherSearch represents the model behind the search form about `common\models\HomePageOther`.
 */
class HomePageOtherSearch extends HomePageOther
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['banner_label', 'welcome_note', 'small_content', 'detail_content', 'caption_1', 'caption_1_detail', 'caption_2', 'caption_2_detail', 'caption_3', 'caption_3_detail', 'footer_content'], 'safe'],
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
        $query = HomePageOther::find();

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

        $query->andFilterWhere(['like', 'banner_label', $this->banner_label])
            ->andFilterWhere(['like', 'welcome_note', $this->welcome_note])
            ->andFilterWhere(['like', 'small_content', $this->small_content])
            ->andFilterWhere(['like', 'detail_content', $this->detail_content])
            ->andFilterWhere(['like', 'caption_1', $this->caption_1])
            ->andFilterWhere(['like', 'caption_1_detail', $this->caption_1_detail])
            ->andFilterWhere(['like', 'caption_2', $this->caption_2])
            ->andFilterWhere(['like', 'caption_2_detail', $this->caption_2_detail])
            ->andFilterWhere(['like', 'caption_3', $this->caption_3])
            ->andFilterWhere(['like', 'caption_3_detail', $this->caption_3_detail])
            ->andFilterWhere(['like', 'footer_content', $this->footer_content]);

        return $dataProvider;
    }
}
