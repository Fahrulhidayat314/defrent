<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblFeedback;

/**
 * TblFeedbackSearch represents the model behind the search form of `app\models\TblFeedback`.
 */
class TblFeedbackSearch extends TblFeedback
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['No_Feedback', 'Id_Mobil', 'No_SIM'], 'integer'],
            [['Rating'], 'number'],
            [['Komentar', 'Tanggal'], 'safe'],
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
        $query = TblFeedback::find();

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
            'No_Feedback' => $this->No_Feedback,
            'Rating' => $this->Rating,
            'Tanggal' => $this->Tanggal,
            'Id_Mobil' => $this->Id_Mobil,
            'No_SIM' => $this->No_SIM,
        ]);

        $query->andFilterWhere(['like', 'Komentar', $this->Komentar]);

        return $dataProvider;
    }
}
