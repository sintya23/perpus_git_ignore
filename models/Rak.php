<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rak".
 *
 * @property int $id
 * @property string $nama
 * @property string $lokasi
 *
 * @property Buku $buku
 */
class Rak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'lokasi'], 'string', 'max' => 100],
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
            'lokasi' => 'Lokasi',
        ];
    }

    /**
     * Gets query for [[Buku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuku()
    {
        return $this->hasOne(Buku::class, ['id_rak' => 'id']);
    }
}
