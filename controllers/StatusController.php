<?php

namespace app\controllers;

use yii\filters\Cors;
use yii\rest\ActiveController;
use app\models\Status;

class StatusController extends ActiveController
{
    /**
     * @inheritdoc
     */
    public function behaviors(): array {
        return array_merge(parent::behaviors(), [
            'corsFilter'  => [
                'class' => Cors::class,
            ],

        ]);
    }

    public $modelClass = Status::class;
}
