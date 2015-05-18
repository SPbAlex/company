<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "salary".
 *
 * @property integer $id
 * @property integer $worker_id
 * @property string $salary
 *
 * @property Worker $worker
 */
class Salary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        if(Yii::$app->user->identity->replica == 1)
            return 'salary';
        else{
            Yii::$app->db->
                createCommand('CREATE TABLE IF NOT EXISTS salary2 like salary;
                                INSERT salary2 SELECT * FROM salary;')->execute();

            return 'salary';
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['worker_id', 'salary'], 'required'],
            [['worker_id'], 'integer'],
            [['salary'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'worker_id' => 'Worker ID',
            'salary' => 'Salary',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorker()
    {
        return $this->hasOne(Worker::className(), ['id' => 'worker_id']);
    }
}
