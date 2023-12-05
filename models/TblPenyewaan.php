<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_penyewaan".
 *
 * @property int $No_Sewa
 * @property int|null $Rencana rencana penyewaan (hari)
 * @property string|null $tgl_sewa
 * @property string|null $Tgl_Kembali
 * @property string|null $Lama_Sewa
 * @property int $No_Pegawai
 * @property int $No_SIM
 * @property int $Id_Mobil
 *
 * @property TblMobil $mobil
 * @property TblAdministrator $noPegawai
 * @property TblUser $noSIM
 * @property TblPelanggaran[] $tblPelanggarans
 * @property TblPembayaran[] $tblPembayarans
 */
class TblPenyewaan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_penyewaan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Rencana', 'No_Pegawai', 'No_SIM', 'Id_Mobil'], 'integer'],
            [['tgl_sewa', 'Tgl_Kembali'], 'safe'],
            [['No_Pegawai', 'No_SIM', 'Id_Mobil'], 'required'],
            [['Lama_Sewa'], 'string', 'max' => 45],
            [['Id_Mobil'], 'exist', 'skipOnError' => true, 'targetClass' => TblMobil::class, 'targetAttribute' => ['Id_Mobil' => 'Id_Mobil']],
            [['No_Pegawai'], 'exist', 'skipOnError' => true, 'targetClass' => TblAdministrator::class, 'targetAttribute' => ['No_Pegawai' => 'No_Pegawai']],
            [['No_SIM'], 'exist', 'skipOnError' => true, 'targetClass' => TblUser::class, 'targetAttribute' => ['No_SIM' => 'No_SIM']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Sewa' => 'No Sewa',
            'Rencana' => 'Rencana',
            'tgl_sewa' => 'Tgl Sewa',
            'Tgl_Kembali' => 'Tgl Kembali',
            'Lama_Sewa' => 'Lama Sewa',
            'No_Pegawai' => 'No Pegawai',
            'No_SIM' => 'No Sim',
            'Id_Mobil' => 'Id Mobil',
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
     * Gets query for [[NoPegawai]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoPegawai()
    {
        return $this->hasOne(TblAdministrator::class, ['No_Pegawai' => 'No_Pegawai']);
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

    /**
     * Gets query for [[TblPelanggarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPelanggarans()
    {
        return $this->hasMany(TblPelanggaran::class, ['No_Sewa' => 'No_Sewa']);
    }

    /**
     * Gets query for [[TblPembayarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPembayarans()
    {
        return $this->hasMany(TblPembayaran::class, ['No_Sewa' => 'No_Sewa']);
    }
}
