<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sample".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property int $status
 */
class Sample extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sample';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'title', 'status'], 'required'],
            [['name', 'title'], 'string'],
            [['status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'title' => 'Title',
            'status' => 'Status',
        ];
    }
}
