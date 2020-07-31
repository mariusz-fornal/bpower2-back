<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "status".
 *
 * @property int|null $id
 * @property string|null $name
 */
class Status extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id'], 'integer'],
            [['name'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
}
