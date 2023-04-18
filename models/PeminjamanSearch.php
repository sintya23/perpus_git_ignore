<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Peminjaman;

/**
 * PeminjamanSearch represents the model behind the search form of `app\models\Peminjaman`.
 */
class PeminjamanSearch extends Peminjaman
{
    // add the publuc attributes that will be used to store the data to be search
    public $buku;
    public $anggota;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_buku', 'id_anggota','tanggal_pinjam', 'tanggal_kembali'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Peminjaman::find()->joinWith(['buku', 'anggota']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['buku'] = [
            'asc' => ['buku.judul' => SORT_ASC],
            'desc' => ['buku.judul' => SORT_DESC],
        ];

        $dataProvider->sort->attributes['anggota'] = [
            'asc' => ['anggota.nama' => SORT_ASC],
            'desc' => ['anggota.nama' => SORT_DESC],
        ];

        $this->load($params);

        if (!($this->load($params) && $this->validate())) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tanggal_pinjam' => $this->tanggal_pinjam,
            'tanggal_kembali' => $this->tanggal_kembali,
        ]);

        $query->andFilterWhere(['like', 'buku.judul', $this->id_buku])
        ->andFilterWhere(['like', 'anggota.nama', $this->id_anggota]);

        return $dataProvider;
    }
}
