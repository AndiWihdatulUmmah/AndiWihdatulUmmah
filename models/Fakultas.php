<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fakultas".
 *
 * @property int $id_fakultas
 * @property string $fakultas
 * @property string $prodi
 * @property int $id_jurusan
 */
class Fakultas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fakultas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_fakultas', 'fakultas', 'prodi', 'id_jurusan'], 'required'],
            [['id_fakultas', 'id_jurusan'], 'integer'],
            [['fakultas'], 'string', 'max' => 50],
            [['prodi'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_fakultas' => 'Id Fakultas',
            'fakultas' => 'Fakultas',
            'prodi' => 'Prodi',
            'id_jurusan' => 'Id Jurusan',
        ];
    }
}
