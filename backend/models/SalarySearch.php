<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Salary;

/**
 * SalarySearch represents the model behind the search form about `common\models\Salary`.
 */
class SalarySearch extends Salary
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'worker_id'], 'integer'],
            [['salary'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
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
        $replica = (Yii::$app->user->identity->replica);
        $query = Salary::find()->where(['valid' => $replica]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'worker_id' => $this->worker_id,
        ]);

        $query->andFilterWhere(['like', 'salary', $this->salary]);

        return $dataProvider;
    }
}
