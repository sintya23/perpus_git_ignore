<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "anggota".
 *
 * @property int $id
 * @property string $nama
 * @property string $nis
 * @property string $kelas
 *
 * @property Peminjaman $peminjaman
 */
class Anggota extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'anggota';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'nis', 'kelas'], 'required'],
            [['nama', 'kelas'], 'string', 'max' => 50],
            [['nis'], 'string', 'max' => 10],
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
            'nis' => 'Nis',
            'kelas' => 'Kelas',
        ];
    }

    /**
     * Gets query for [[Peminjaman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjaman()
    {
        return $this->hasOne(Peminjaman::class, ['id_anggota' => 'id']);
    }
}
