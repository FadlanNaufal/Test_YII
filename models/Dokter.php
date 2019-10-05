<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dokter".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $role
 * @property string $poli
 * @property string $nama
 */
class Dokter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dokter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'role', 'poli', 'nama'], 'required'],
            [['username', 'password', 'role', 'poli', 'nama'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'role' => 'Role',
            'poli' => 'Poli',
            'nama' => 'Nama',
        ];
    }
}
