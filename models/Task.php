<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "task".
 *
 * @property int|null $id
 * @property string|null $title
 * @property int|null $status
 * @property string|null $owner
 */
class Task extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['id', 'status'], 'integer'],
            [['title', 'owner'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'status' => 'Status',
            'owner' => 'Owner',
        ];
    }
}
