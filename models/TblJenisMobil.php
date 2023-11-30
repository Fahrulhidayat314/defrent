<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_jenis_mobil".
 *
 * @property int $No_Jenis
 * @property string $Jenis_Mobil
 * @property int $Jumlah_Kursi
 *
 * @property TblMobil[] $tblMobils
 */
class TblJenisMobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_jenis_mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Jenis_Mobil', 'Jumlah_Kursi'], 'required'],
            [['Jumlah_Kursi'], 'integer'],
            [['Jenis_Mobil'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Jenis' => 'No Jenis',
            'Jenis_Mobil' => 'Jenis Mobil',
            'Jumlah_Kursi' => 'Jumlah Kursi',
        ];
    }

    /**
     * Gets query for [[TblMobils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblMobils()
    {
        return $this->hasMany(TblMobil::class, ['No_Jenis' => 'No_Jenis']);
    }
}
