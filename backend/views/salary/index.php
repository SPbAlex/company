<?php

    use common\models\Salary;
    use console\perm\UserRole;
    use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SalarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Salaries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salary-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Salary', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => UserRole::getAttributes([
                                                 'id',
                                                 'worker_id',
                                                 'salary',
                                                 ['class' => 'yii\grid\ActionColumn'],
                                             ], (new Salary())),

    ]); ?>

</div>
