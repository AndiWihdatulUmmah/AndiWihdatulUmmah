<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "universitas".
 *
 * @property int $id_universitas
 * @property string $universitas
 * @property int $id_fakultas
 * @property int $id_jurusan
 * @property int $id_dosen
 * @property int $id_mahasiswa
 */
class Universitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'universitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['universitas', 'id_fakultas', 'id_jurusan', 'id_dosen', 'id_mahasiswa'], 'required'],
            [['id_fakultas', 'id_jurusan', 'id_dosen', 'id_mahasiswa'], 'integer'],
            [['universitas'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_universitas' => 'Id Universitas',
            'universitas' => 'Universitas',
            'id_fakultas' => 'Id Fakultas',
            'id_jurusan' => 'Id Jurusan',
            'id_dosen' => 'Id Dosen',
            'id_mahasiswa' => 'Id Mahasiswa',
        ];
    }
    public function getJurusan() 
    {
         // a comment has one jurusan
         return $this->hasOne(Jurusan::class, ['id_jurusan' => 'id_jurusan']);
    }
    public function getFakultas() 
    {
             // a comment has one fakultas
             return $this->hasOne(Fakultas::class, ['id_fakultas' => 'id_fakultas']);
    }
    public function getDosen() 
    {
         // a comment has one dosen
         return $this->hasOne(Dosen::class, ['id_dosen' => 'id_dosen']);
    }
    public function getMahasiswa() 
    { 
         // a comment has one mahasiswa
         return $this->hasOne(Mahasiswa::class, ['id_mahasiswa' => 'id_mahasiswa']);
    }


}

    
