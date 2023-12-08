<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_pelanggaran".
 *
 * @property int $No_Pelanggaran
 * @property int|null $Denda
 * @property string|null $Tanggal
 * @property int $No_Aturan
 * @property int $No_Sewa
 *
 * @property TblAturan $noAturan
 * @property TblPenyewaan $noSewa
 */
class TblPelanggaran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_pelanggaran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Denda', 'No_Aturan', 'No_Sewa'], 'integer'],
            [['Tanggal'], 'safe'],
            [['No_Aturan', 'No_Sewa'], 'required'],
            [['No_Aturan'], 'exist', 'skipOnError' => true, 'targetClass' => TblAturan::class, 'targetAttribute' => ['No_Aturan' => 'No_Aturan']],
            [['No_Sewa'], 'exist', 'skipOnError' => true, 'targetClass' => TblPenyewaan::class, 'targetAttribute' => ['No_Sewa' => 'No_Sewa']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_Pelanggaran' => 'No Pelanggaran',
            'Denda' => 'Denda',
            'Tanggal' => 'Tanggal',
            'No_Aturan' => 'No Aturan',
            'No_Sewa' => 'No Sewa',
        ];
    }

    /**
     * Gets query for [[NoAturan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoAturan()
    {
        return $this->hasOne(TblAturan::class, ['No_Aturan' => 'No_Aturan']);
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
