<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblAdministrator;

/**
 * TblAdministratorSearch represents the model behind the search form of `app\models\TblAdministrator`.
 */
class TblAdministratorSearch extends TblAdministrator
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Pegawai'], 'integer'],
            [['Nama_Admin', 'No_Hp', 'Alamat', 'Jabatan'], 'safe'],
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
        $query = TblAdministrator::find();

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
            'No_Pegawai' => $this->No_Pegawai,
        ]);

        $query->andFilterWhere(['like', 'Nama_Admin', $this->Nama_Admin])
            ->andFilterWhere(['like', 'No_Hp', $this->No_Hp])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Jabatan', $this->Jabatan]);

        return $dataProvider;
    }
}
