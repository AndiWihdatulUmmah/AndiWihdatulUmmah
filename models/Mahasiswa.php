<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa".
 *
 * @property int $id_mahasiswa
 * @property string $nama
 * @property int $nim
 * @property string $alamat
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mahasiswa', 'nama', 'nim', 'alamat'], 'required'],
            [['id_mahasiswa', 'nim'], 'integer'],
            [['nama'], 'string', 'max' => 20],
            [['alamat'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mahasiswa' => 'Id Mahasiswa',
            'nama' => 'Nama',
            'nim' => 'Nim',
            'alamat' => 'Alamat',
        ];
    }
}
