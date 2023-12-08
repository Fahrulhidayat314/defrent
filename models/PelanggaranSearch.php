<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblPelanggaran;

/**
 * PelanggaranSearch represents the model behind the search form of `app\models\TblPelanggaran`.
 */
class PelanggaranSearch extends TblPelanggaran
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Pelanggaran', 'Denda', 'No_Aturan', 'No_Sewa'], 'integer'],
            [['Tanggal'], 'safe'],
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
        $query = TblPelanggaran::find();

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
            'No_Pelanggaran' => $this->No_Pelanggaran,
            'Denda' => $this->Denda,
            'Tanggal' => $this->Tanggal,
            'No_Aturan' => $this->No_Aturan,
            'No_Sewa' => $this->No_Sewa,
        ]);

        return $dataProvider;
    }
}
