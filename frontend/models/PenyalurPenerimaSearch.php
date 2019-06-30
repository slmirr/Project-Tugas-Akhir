<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PenyalurPenerima;

/**
 * PenyalurPenerimaSearch represents the model behind the search form of `app\models\PenyalurPenerima`.
 */
class PenyalurPenerimaSearch extends PenyalurPenerima
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang', 'id_petugas', 'id_penerima'], 'integer'],
            [['jumlah', 'tanggal', 'foto'], 'safe'],
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
        $query = PenyalurPenerima::find();

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
            'tanggal' => $this->tanggal,
            'id_barang' => $this->id_barang,
            'id_petugas' => $this->id_petugas,
            'id_penerima' => $this->id_penerima,
        ]);

        $query->andFilterWhere(['like', 'jumlah', $this->jumlah])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
