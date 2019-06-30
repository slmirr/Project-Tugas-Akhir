<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Barang;

/**
 * BarangSearch represents the model behind the search form of `app\models\Barang`.
 */
class BarangSearch extends Barang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jenis', 'donatur_id', 'petugas_id'], 'integer'],
            [['nama', 'jumlah', 'satuan', 'kondisi', 'foto', 'tanggal_terima', 'petugas'], 'safe'],
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
        $query = Barang::find();

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
            'id_jenis' => $this->id_jenis,
            'donatur_id' => $this->donatur_id,
            'tanggal_terima' => $this->tanggal_terima,
            'petugas_id' => $this->petugas_id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'jumlah', $this->jumlah])
            ->andFilterWhere(['like', 'satuan', $this->satuan])
            ->andFilterWhere(['like', 'kondisi', $this->kondisi])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'petugas', $this->petugas]);

        return $dataProvider;
    }
}
