<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Buku;

/**
 * BukuSearch represents the model behind the search form of `app\models\Buku`.
 */
class BukuSearch extends Buku
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_terbit', 'id_rak','kode', 'judul', 'penulis', 'penerbit'], 'safe'],
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
        $query = Buku::find()->joinWith(['rak']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['rak'] = [
            'asc' => ['rak.nama' => SORT_ASC],
            'desc' => ['rak.nama' => SORT_DESC],
        ];

        $this->load($params);

        if (!($this->load($params) && $this->validate())) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            //'id' => $this->id,
            'tahun_terbit' => $this->tahun_terbit,
            //'id_rak' => $this->id_rak,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'judul', $this->judul])
            ->andFilterWhere(['like', 'penulis', $this->penulis])
            ->andFilterWhere(['like', 'penerbit', $this->penerbit])
            ->andFilterWhere(['like', 'rak.nama', $this->id_rak]);

        return $dataProvider;
    }
}
