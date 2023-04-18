<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "buku".
 *
 * @property int $id
 * @property string $kode
 * @property string $judul
 * @property string $penulis
 * @property string $penerbit
 * @property int $tahun_terbit
 * @property int $id_rak
 *
 * @property Peminjaman $peminjaman
 * @property Rak $rak
 */
class Buku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_terbit', 'id_rak'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['judul', 'penulis', 'penerbit'], 'string', 'max' => 100],
            [['id_rak'], 'exist', 'skipOnError' => true, 'targetClass' => Rak::class, 'targetAttribute' => ['id_rak' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'judul' => 'Judul',
            'penulis' => 'Penulis',
            'penerbit' => 'Penerbit',
            'tahun_terbit' => 'Tahun Terbit',
            'id_rak' => 'Rak',
        ];
    }

    /**
     * Gets query for [[Peminjaman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeminjaman()
    {
        return $this->hasMany(Peminjaman::class, ['id_buku' => 'id']);
    }

    /**
     * Gets query for [[Rak]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRak()
    {
        return $this->hasOne(Rak::class, ['id' => 'id_rak']);
    }
}
