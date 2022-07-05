<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Universitas;

/**
 * UniversitasSearch represents the model behind the search form of `app\models\Universitas`.
 */
class UniversitasSearch extends Universitas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_universitas', 'id_fakultas', 'id_jurusan', 'id_dosen', 'id_mahasiswa'], 'integer'],
            [['universitas'], 'safe'],
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
        $query = Universitas::find();

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
            'id_universitas' => $this->id_universitas,
            'id_fakultas' => $this->id_fakultas,
            'id_jurusan' => $this->id_jurusan,
            'id_dosen' => $this->id_dosen,
            'id_mahasiswa' => $this->id_mahasiswa,
        ]);

        $query->andFilterWhere(['like', 'universitas', $this->universitas]);

        return $dataProvider;
    }
}
