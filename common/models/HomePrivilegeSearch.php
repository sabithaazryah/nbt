<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\HomePrivilege;

/**
 * HomePrivilegeSearch represents the model behind the search form about `common\models\HomePrivilege`.
 */
class HomePrivilegeSearch extends HomePrivilege
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'CB', 'UB'], 'integer'],
            [['title', 'content', 'privilege_1', 'privilege_2', 'privilege_3', 'image', 'alt_tag', 'DOC', 'DOU'], 'safe'],
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
        $query = HomePrivilege::find();

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

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'privilege_1', $this->privilege_1])
            ->andFilterWhere(['like', 'privilege_2', $this->privilege_2])
            ->andFilterWhere(['like', 'privilege_3', $this->privilege_3])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'alt_tag', $this->alt_tag]);

        return $dataProvider;
    }
}
