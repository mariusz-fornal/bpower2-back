<?php

namespace app\models\search;

use app\models\Task;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class TaskSearch extends Task
{
    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            [['id', 'status'], 'integer'],
            [['title', 'owner'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios(): array
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Task::find();

        $dataProvider = new ActiveDataProvider(['query' => $query]);

        $this->load($params);
        $query->where(Yii::$app->request->get('filter'));

        return $dataProvider;
    }
}
