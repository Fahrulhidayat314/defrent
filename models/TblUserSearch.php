<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblUser;

/**
 * TblUserSearch represents the model behind the search form of `app\models\TblUser`.
 */
class TblUserSearch extends TblUser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_SIM'], 'integer'],
            [['Nama_User', 'No_Hp', 'Alamat'], 'safe'],
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
        $query = TblUser::find();

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
            'No_SIM' => $this->No_SIM,
        ]);

        $query->andFilterWhere(['like', 'Nama_User', $this->Nama_User])
            ->andFilterWhere(['like', 'No_Hp', $this->No_Hp])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat]);

        return $dataProvider;
    }
}
