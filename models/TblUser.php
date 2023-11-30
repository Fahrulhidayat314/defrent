<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property int $No_SIM
 * @property string $Nama_User
 * @property string|null $No_Hp
 * @property string|null $Alamat
 *
 * @property TblFeedback[] $tblFeedbacks
 * @property TblPenyewaan[] $tblPenyewaans
 */
class TblUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nama_User'], 'required'],
            [['Alamat'], 'string'],
            [['Nama_User', 'No_Hp'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'No_SIM' => 'No Sim',
            'Nama_User' => 'Nama User',
            'No_Hp' => 'No Hp',
            'Alamat' => 'Alamat',
        ];
    }

    /**
     * Gets query for [[TblFeedbacks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblFeedbacks()
    {
        return $this->hasMany(TblFeedback::class, ['No_SIM' => 'No_SIM']);
    }

    /**
     * Gets query for [[TblPenyewaans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTblPenyewaans()
    {
        return $this->hasMany(TblPenyewaan::class, ['No_SIM' => 'No_SIM']);
    }
}
