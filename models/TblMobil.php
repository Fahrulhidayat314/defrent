<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_mobil".
 *
 * @property int $Id_Mobil
 * @property string $Plat_No
 * @property string $No_Seri
 * @property string $Merk
 * @property string|null $Status
 * @property int|null $harga_sewa
 * @property string $Lokasi
 * @property int $No_Jenis
 *
 * @property TblJenisMobil $noJenis
 * @property TblFeedback[] $tblFeedbacks
 * @property TblPenyewaan[] $tblPenyewaans
 */
class TblMobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Plat_No', 'No_Seri', 'Merk', 'Lokasi', 'No_Jenis'], 'required'],
            [['Status'], 'string'],
            [['harga_sewa', 'No_Jenis'], 'integer'],
            [['Plat_No', 'Merk', 'Lokasi'], 'string', 'max' => 45],
            [['No_Seri'], 'string', 'max' => 20],
            [['No_Jenis'], 'exist', 'skipOnError' => true, 'targetClass' => TblJenisMobil::class, 'targetAttribute' => ['No_Jenis' => 'No_Jenis']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Mobil' => 'Id Mobil',
            'Plat_No' => 'Plat No',
            'No_Seri' => 'No Seri',
            'Merk' => 'Merk',
            'Status' => 'Status',
            'harga_sewa' => 'Harga Sewa',
            'Lokasi' => 'Lokasi',
            'No_Jenis' => 'No Jenis',
        ];
    }

    /**
     * Gets query for [[TblJenisMobils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblJenisMobils()
    {
        return $this->hasOne(TblJenisMobil::class, ['No_Jenis' => 'No_Jenis']);
    }

    /**
     * Gets query for [[TblFeedbacks]]. 
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblFeedbacks()
    {
        return $this->hasMany(TblFeedback::class, ['Id_Mobil' => 'Id_Mobil']);
    }

    /**
     * Gets query for [[TblPenyewaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPenyewaans()
    {
        return $this->hasMany(TblPenyewaan::class, ['Id_Mobil' => 'Id_Mobil']);
    }
 
}
