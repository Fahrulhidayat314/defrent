<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pembayaran".
 *
 * @property int $No_Transaksi
 * @property string|null $Tanggal
 * @property int|null $Total_Harga
 * @property string|null $Metode_Pembayaran
 * @property int $No_Sewa
 *
 * @property TblPenyewaan $noSewa
 */
class TblPembayaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pembayaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Tanggal'], 'safe'],
            [['Total_Harga', 'No_Sewa'], 'integer'],
            [['No_Sewa'], 'required'],
            [['Metode_Pembayaran'], 'string', 'max' => 45],
            [['No_Sewa'], 'exist', 'skipOnError' => true, 'targetClass' => TblPenyewaan::class, 'targetAttribute' => ['No_Sewa' => 'No_Sewa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Transaksi' => 'No Transaksi',
            'Tanggal' => 'Tanggal',
            'Total_Harga' => 'Total Harga',
            'Metode_Pembayaran' => 'Metode Pembayaran',
            'No_Sewa' => 'No Sewa',
        ];
    }

    /**
     * Gets query for [[NoSewa]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoSewa()
    {
        return $this->hasOne(TblPenyewaan::class, ['No_Sewa' => 'No_Sewa']);
    }
}
