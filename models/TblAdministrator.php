<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_administrator".
 *
 * @property int $No_Pegawai
 * @property string $Nama_Admin
 * @property string|null $No_Hp
 * @property string|null $Alamat
 * @property string $Jabatan
 *
 * @property TblPenyewaan[] $tblPenyewaans
 */
class TblAdministrator extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_administrator';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_Admin', 'Jabatan'], 'required'],
            [['Alamat'], 'string'],
            [['Nama_Admin', 'No_Hp', 'Jabatan'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Pegawai' => 'No Pegawai',
            'Nama_Admin' => 'Nama Admin',
            'No_Hp' => 'No Hp',
            'Alamat' => 'Alamat',
            'Jabatan' => 'Jabatan',
        ];
    }

    /**
     * Gets query for [[TblPenyewaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPenyewaans()
    {
        return $this->hasMany(TblPenyewaan::class, ['No_Pegawai' => 'No_Pegawai']);
    }
}
