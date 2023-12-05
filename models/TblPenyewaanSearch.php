<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblPenyewaan;

/**
 * TblPenyewaanSearch represents the model behind the search form of `app\models\TblPenyewaan`.
 */
class TblPenyewaanSearch extends TblPenyewaan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Sewa', 'Rencana', 'No_Pegawai', 'No_SIM', 'Id_Mobil'], 'integer'],
            [['tgl_sewa', 'Tgl_Kembali', 'Lama_Sewa'], 'safe'],
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
        $query = TblPenyewaan::find();

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
            'No_Sewa' => $this->No_Sewa,
            'Rencana' => $this->Rencana,
            'tgl_sewa' => $this->tgl_sewa,
            'Tgl_Kembali' => $this->Tgl_Kembali,
            'No_Pegawai' => $this->No_Pegawai,
            'No_SIM' => $this->No_SIM,
            'Id_Mobil' => $this->Id_Mobil,
        ]);

        $query->andFilterWhere(['like', 'Lama_Sewa', $this->Lama_Sewa]);

        return $dataProvider;
    }
}
