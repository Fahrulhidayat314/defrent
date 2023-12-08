<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblPembayaran;

/**
 * TblPembayaranSearch represents the model behind the search form of `app\models\TblPembayaran`.
 */
class TblPembayaranSearch extends TblPembayaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Transaksi', 'Total_Harga', 'No_Sewa'], 'integer'],
            [['Tanggal', 'Metode_Pembayaran'], 'safe'],
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
        $query = TblPembayaran::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'No_Transaksi' => $this->No_Transaksi,
            'Tanggal' => $this->Tanggal,
            'Total_Harga' => $this->Total_Harga,
            'No_Sewa' => $this->No_Sewa,
        ]);

        $query->andFilterWhere(['like', 'Metode_Pembayaran', $this->Metode_Pembayaran]);

        return $dataProvider;
    }
}
