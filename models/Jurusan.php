<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jurusan".
 *
 * @property int $id_jurusan
 * @property string $jurusan
 * @property string $mata_kuliah
 * @property int $id_dosen
 */
class Jurusan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jurusan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jurusan', 'mata_kuliah', 'id_dosen'], 'required'],
            [['id_dosen'], 'integer'],
            [['jurusan', 'mata_kuliah'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jurusan' => 'Id Jurusan',
            'jurusan' => 'Jurusan',
            'mata_kuliah' => 'Mata Kuliah',
            'id_dosen' => 'Id Dosen',
        ];
    }
}
