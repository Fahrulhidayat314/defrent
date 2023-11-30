<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblMobil;

/**
 * TblMobilSearch represents the model behind the search form of `app\models\TblMobil`.
 */
class TblMobilSearch extends TblMobil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Mobil', 'harga_sewa', 'No_Jenis'], 'integer'],
            [['Plat_No', 'No_Seri', 'Merk', 'Status', 'Lokasi'], 'safe'],
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
        $query = TblMobil::find();

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
            'Id_Mobil' => $this->Id_Mobil,
            'harga_sewa' => $this->harga_sewa,
            'No_Jenis' => $this->No_Jenis,
        ]);

        $query->andFilterWhere(['like', 'Plat_No', $this->Plat_No])
            ->andFilterWhere(['like', 'No_Seri', $this->No_Seri])
            ->andFilterWhere(['like', 'Merk', $this->Merk])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Lokasi', $this->Lokasi]);

        return $dataProvider;
    }
}
