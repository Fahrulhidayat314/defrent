<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_mobil".
 *
 * @property int $id_mobil
 * @property int $no_jenis
 * @property string $jenis_mobil
 * @property string $plat_no
 * @property int|null $harga_sewa
 * @property string $merk
 */
class ViewMobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mobil', 'no_jenis', 'harga_sewa'], 'integer'],
            [['no_jenis', 'jenis_mobil', 'plat_no', 'merk'], 'required'],
            [['jenis_mobil', 'plat_no', 'merk'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mobil' => 'Id Mobil',
            'no_jenis' => 'No Jenis',
            'jenis_mobil' => 'Jenis Mobil',
            'plat_no' => 'Plat No',
            'harga_sewa' => 'Harga Sewa',
            'merk' => 'Merk',
        ];
    }
}
