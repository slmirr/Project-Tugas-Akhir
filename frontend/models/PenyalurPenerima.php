<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penyalur_penerima".
 *
 * @property int $id
 * @property string $jumlah
 * @property string $tanggal
 * @property string $foto
 * @property int $id_barang
 * @property int $id_petugas
 * @property int $id_penerima
 */
class PenyalurPenerima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penyalur_penerima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_barang', 'id_petugas', 'id_penerima'], 'integer'],
            [['tanggal'], 'safe'],
            [['jumlah', 'foto'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jumlah' => 'Jumlah',
            'tanggal' => 'Tanggal',
            'foto' => 'Foto',
            'id_barang' => 'Id Barang',
            'id_petugas' => 'Id Petugas',
            'id_penerima' => 'Id Penerima',
        ];
    }
}
