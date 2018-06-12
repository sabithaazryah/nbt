<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomePage;

/**
 * HomePageSearch represents the model behind the search form about `common\models\HomePage`.
 */
class HomePageSearch extends HomePage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['what_we_do', 'service_1', 'service_2', 'service_3', 'service_4', 'service_5', 'service_6', 'who_we_are'], 'safe'],
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
        $query = HomePage::find();

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

        $query->andFilterWhere(['like', 'what_we_do', $this->what_we_do])
            ->andFilterWhere(['like', 'service_1', $this->service_1])
            ->andFilterWhere(['like', 'service_2', $this->service_2])
            ->andFilterWhere(['like', 'service_3', $this->service_3])
            ->andFilterWhere(['like', 'service_4', $this->service_4])
            ->andFilterWhere(['like', 'service_5', $this->service_5])
            ->andFilterWhere(['like', 'service_6', $this->service_6])
            ->andFilterWhere(['like', 'who_we_are', $this->who_we_are]);

        return $dataProvider;
    }
}
