<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jurusan;

/**
 * JurusanSearch represents the model behind the search form of `app\models\Jurusan`.
 */
class JurusanSearch extends Jurusan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_jurusan', 'id_dosen'], 'integer'],
            [['jurusan', 'mata_kuliah'], 'safe'],
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
        $query = Jurusan::find();

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
            'id_jurusan' => $this->id_jurusan,
            'id_dosen' => $this->id_dosen,
        ]);

        $query->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'mata_kuliah', $this->mata_kuliah]);

        return $dataProvider;
    }
}
