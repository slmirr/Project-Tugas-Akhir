<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "penerima".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $hp
 * @property string $email
 * @property string $foto
 */
class Penerima extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penerima';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['alamat'], 'string'],
            [['nama', 'foto'], 'string', 'max' => 45],
            [['hp'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'hp' => 'Hp',
            'email' => 'Email',
            'foto' => 'Foto',
        ];
    }
}
