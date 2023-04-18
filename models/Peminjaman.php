<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "peminjaman".
 *
 * @property int $id
 * @property string|null $tanggal_pinjam
 * @property string|null $tanggal_kembali
 * @property int|null $id_buku
 * @property int|null $id_anggota
 */
class Peminjaman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peminjaman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tanggal_pinjam', 'tanggal_kembali'], 'safe'],
            [['id_buku', 'id_anggota'], 'integer'],
            [['id_buku'], 'exist', 'skipOnError' => true, 'targetClass' => Buku::class, 'targetAttribute' => ['id_buku' => 'id']],
            [['id_anggota'], 'exist', 'skipOnError' => true, 'targetClass' => Anggota::class, 'targetAttribute' => ['id_anggota' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal_pinjam' => 'Tanggal Pinjam',
            'tanggal_kembali' => 'Tanggal Kembali',
            'id_buku' => 'Buku',
            'id_anggota' => 'Anggota',
        ];
    }

    /**
     * Gets query for [[Anggota]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnggota()
    {
        return $this->hasOne(Anggota::className(), ['id' => 'id_anggota']);
    }

    /**
     * Gets query for [[Buku]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBuku()
    {
        return $this->hasOne(Buku::className(), ['id' => 'id_buku']);
    }
}
