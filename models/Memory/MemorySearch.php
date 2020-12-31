<?php

namespace app\models\Memory;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Memory\Memory;

/**
 * MemorySearch represents the model behind the search form of `app\models\Memory\Memory`.
 */
class MemorySearch extends Memory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'ma_nr'], 'integer'],
            [['ma_name', 'date', 'remind_date', 'text'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Memory::find();

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
            'ma_nr' => $this->ma_nr,
            'date' => $this->date,
            'remind_date' => $this->remind_date,
        ]);

        $query->andFilterWhere(['like', 'ma_name', $this->ma_name])
            ->andFilterWhere(['like', 'text', $this->text]);

        return $dataProvider;
    }
}
