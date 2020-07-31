<?php

namespace app\controllers;

use app\models\search\TaskSearch;
use app\models\Task;
use yii\filters\Cors;
use yii\rest\ActiveController;

class TaskController extends ActiveController
{
    public $modelClass = Task::class;

    public function actions()
    {
        $actions = parent::actions();
        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
        return $actions;
    }

    public function prepareDataProvider()
    {
        $searchModel = new TaskSearch();
        return $searchModel->search(\Yii::$app->request->queryParams);
    }

    /**
     * @inheritdoc
     */
    public function behaviors(): array
    {
        return array_merge(
            parent::behaviors(),
            [
                'corsFilter' => [
                    'class' => Cors::class,
                ],
            ]
        );
    }
}
