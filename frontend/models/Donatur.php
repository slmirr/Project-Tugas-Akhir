<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donatur".
 *
 * @property int $id
 * @property string $nama
 * @property string $alamat
 * @property string $hp
 * @property string $email
 * @property string $foto
 */
class Donatur extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'donatur';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['alamat'], 'string'],
            [['nama'], 'string', 'max' => 45],
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
            'nama' => 'Nama Donatur',
            'alamat' => 'Alamat',
            'hp' => 'No. Hp',
            'email' => 'Email'
        ];
    }
}
