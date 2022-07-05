<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fakultas;

/**
 * FakultasSearch represents the model behind the search form of `app\models\Fakultas`.
 */
class FakultasSearch extends Fakultas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fakultas', 'id_jurusan'], 'integer'],
            [['fakultas', 'prodi'], 'safe'],
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
        $query = Fakultas::find();

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
            'id_fakultas' => $this->id_fakultas,
            'id_jurusan' => $this->id_jurusan,
        ]);

        $query->andFilterWhere(['like', 'fakultas', $this->fakultas])
            ->andFilterWhere(['like', 'prodi', $this->prodi]);

        return $dataProvider;
    }
}
