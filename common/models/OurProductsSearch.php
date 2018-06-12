<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\OurProducts;

/**
 * OurProductsSearch represents the model behind the search form about `common\models\OurProducts`.
 */
class OurProductsSearch extends OurProducts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'CB', 'UB'], 'integer'],
            [['title_1', 'image_1', 'description_1', 'title_2', 'image_2', 'description_2', 'title_3', 'image_3', 'description_3', 'DOC', 'DOU'], 'safe'],
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
        $query = OurProducts::find();

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
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'title_1', $this->title_1])
            ->andFilterWhere(['like', 'image_1', $this->image_1])
            ->andFilterWhere(['like', 'description_1', $this->description_1])
            ->andFilterWhere(['like', 'title_2', $this->title_2])
            ->andFilterWhere(['like', 'image_2', $this->image_2])
            ->andFilterWhere(['like', 'description_2', $this->description_2])
            ->andFilterWhere(['like', 'title_3', $this->title_3])
            ->andFilterWhere(['like', 'image_3', $this->image_3])
            ->andFilterWhere(['like', 'description_3', $this->description_3]);

        return $dataProvider;
    }
}
