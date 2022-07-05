<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen".
 *
 * @property int $id_dosen
 * @property string $dosen
 * @property int $id_mahasiswa
 * @property string $nama_mahasiswa
 * @property int $id_jurusan
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_dosen', 'dosen', 'id_mahasiswa', 'nama_mahasiswa', 'id_jurusan'], 'required'],
            [['id_dosen', 'id_mahasiswa', 'id_jurusan'], 'integer'],
            [['dosen', 'nama_mahasiswa'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_dosen' => 'Id Dosen',
            'dosen' => 'Dosen',
            'id_mahasiswa' => 'Id Mahasiswa',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'id_jurusan' => 'Id Jurusan',
        ];
    }
}
