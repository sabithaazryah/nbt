<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Tyres;

/**
 * TyresSearch represents the model behind the search form about `common\models\Tyres`.
 */
class TyresSearch extends Tyres
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'brand', 'type', 'status', 'CB', 'UB'], 'integer'],
            [['spec_1', 'spec_1_value', 'spec_2', 'spec_2_value', 'image', 'alt_tag', 'DOC', 'DOU'], 'safe'],
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
        $query = Tyres::find();

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
            'brand' => $this->brand,
            'type' => $this->type,
            'status' => $this->status,
            'CB' => $this->CB,
            'UB' => $this->UB,
            'DOC' => $this->DOC,
            'DOU' => $this->DOU,
        ]);

        $query->andFilterWhere(['like', 'spec_1', $this->spec_1])
            ->andFilterWhere(['like', 'spec_1_value', $this->spec_1_value])
            ->andFilterWhere(['like', 'spec_2', $this->spec_2])
            ->andFilterWhere(['like', 'spec_2_value', $this->spec_2_value])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'alt_tag', $this->alt_tag]);

        return $dataProvider;
    }
}
