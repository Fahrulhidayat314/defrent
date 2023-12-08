<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_feedback".
 *
 * @property int $No_Feedback
 * @property float|null $Rating
 * @property string|null $Komentar
 * @property string|null $Tanggal
 * @property int $Id_Mobil
 * @property int $No_SIM
 *
 * @property TblMobil $mobil
 * @property TblUser $noSIM
 */
class TblFeedback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_feedback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Rating'], 'number'],
            [['Tanggal'], 'safe'],
            [['Id_Mobil', 'No_SIM'], 'required'],
            [['Id_Mobil', 'No_SIM'], 'integer'],
            [['Komentar'], 'string', 'max' => 45],
            [['Id_Mobil'], 'exist', 'skipOnError' => true, 'targetClass' => TblMobil::class, 'targetAttribute' => ['Id_Mobil' => 'Id_Mobil']],
            [['No_SIM'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::class, 'targetAttribute' => ['No_SIM' => 'No_SIM']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Feedback' => 'No Feedback',
            'Rating' => 'Rating',
            'Komentar' => 'Komentar',
            'Tanggal' => 'Tanggal',
            'Id_Mobil' => 'Id Mobil',
            'No_SIM' => 'No Sim',
        ];
    }

    /**
     * Gets query for [[Mobil]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMobil()
    {
        return $this->hasOne(TblMobil::class, ['Id_Mobil' => 'Id_Mobil']);
    }

    /**
     * Gets query for [[NoSIM]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSIM()
    {
        return $this->hasOne(TblUser::class, ['No_SIM' => 'No_SIM']);
    }
}
