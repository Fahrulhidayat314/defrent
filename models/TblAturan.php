<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_aturan".
 *
 * @property int $No_Aturan
 * @property string $Aturan
 * @property string $Denda
 *
 * @property TblPelanggaran[] $tblPelanggarans
 */
class TblAturan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_aturan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Aturan', 'Denda'], 'required'],
            [['Aturan', 'Denda'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */ 
    public function attributeLabels()
    {
        return [
            'No_Aturan' => 'No Aturan',
            'Aturan' => 'Aturan',
            'Denda' => 'Denda',
        ];
    }

    /**
     * Gets query for [[TblPelanggarans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPelanggarans()
    {
        return $this->hasMany(TblPelanggaran::class, ['No_Aturan' => 'No_Aturan']);
    }
}
