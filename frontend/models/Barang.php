<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "barang".
 *
 * @property int $id
 * @property string $nama
 * @property string $jumlah
 * @property string $satuan
 * @property string $kondisi
 * @property string $foto
 * @property int $id_jenis
 * @property int $donatur_id
 * @property string $tanggal_terima
 * @property string $petugas
 * @property int $petugas_id
 */
class Barang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'barang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_jenis', 'donatur_id', 'petugas_id'], 'integer'],
            [['satuan', 'kondisi'], 'string'],
            [['tanggal_terima'], 'safe'],
            [['nama', 'jumlah', 'foto', 'petugas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama Donatur',
            'jumlah' => 'Jumlah Barang',
            'satuan' => 'Satuan Barang',
            'kondisi' => 'Kondisi Barang',
            'foto' => 'Foto',
            'id_jenis' => 'Id Jenis',
            'tanggal_terima' => 'Tanggal Terima',
            'petugas' => 'Petugas',
        ];
    }
}
