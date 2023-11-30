<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblJenisMobil;

/**
 * TblJenisMobilSearch represents the model behind the search form of `app\models\TblJenisMobil`.
 */
class TblJenisMobilSearch extends TblJenisMobil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Jenis', 'Jumlah_Kursi'], 'integer'],
            [['Jenis_Mobil'], 'safe'],
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
        $query = TblJenisMobil::find();

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
            'No_Jenis' => $this->No_Jenis,
            'Jumlah_Kursi' => $this->Jumlah_Kursi,
        ]);

        $query->andFilterWhere(['like', 'Jenis_Mobil', $this->Jenis_Mobil]);

        return $dataProvider;
    }
}
