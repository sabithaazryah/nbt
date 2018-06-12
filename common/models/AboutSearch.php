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
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['image', 'content', 'work_cycle', 'work_cycle_1', 'work_cycle_1_content', 'work_cycle_2', 'work_cycle_2_content', 'work_cycle_3', 'work_cycle_3_content', 'work_cycle_4', 'work_cycle_4_content', 'work_cycle_5', 'work_cycle_5_content', 'work_cycle_6', 'work_cycle_6_content', 'DOC', 'DOU'], 'safe'],
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
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'work_cycle', $this->work_cycle])
            ->andFilterWhere(['like', 'work_cycle_1', $this->work_cycle_1])
            ->andFilterWhere(['like', 'work_cycle_1_content', $this->work_cycle_1_content])
            ->andFilterWhere(['like', 'work_cycle_2', $this->work_cycle_2])
            ->andFilterWhere(['like', 'work_cycle_2_content', $this->work_cycle_2_content])
            ->andFilterWhere(['like', 'work_cycle_3', $this->work_cycle_3])
            ->andFilterWhere(['like', 'work_cycle_3_content', $this->work_cycle_3_content])
            ->andFilterWhere(['like', 'work_cycle_4', $this->work_cycle_4])
            ->andFilterWhere(['like', 'work_cycle_4_content', $this->work_cycle_4_content])
            ->andFilterWhere(['like', 'work_cycle_5', $this->work_cycle_5])
            ->andFilterWhere(['like', 'work_cycle_5_content', $this->work_cycle_5_content])
            ->andFilterWhere(['like', 'work_cycle_6', $this->work_cycle_6])
            ->andFilterWhere(['like', 'work_cycle_6_content', $this->work_cycle_6_content]);

        return $dataProvider;
    }
}
