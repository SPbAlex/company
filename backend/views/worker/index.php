<?php

use yii\helpers\Html;
use yii\grid\GridView;
    use yii\grid\ActionColumn;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Workers';
$this->params['breadcrumbs'][] = $this->title;
    $user = new \console\perm\UserRole();
    $attributes = [ ['class' => 'yii\grid\SerialColumn']];
    $fields = [
        'id',
        'first_name',
        'last_name',
        'salary',
    ];

    foreach($fields as $field) {
        if($user->can('worker', $field, 'select')) {
            $attributes []= $field;
        }
    }
    $attributes []= ['class' => 'yii\grid\ActionColumn'];

?>
<div class="worker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $attributes
    ]); ?>

</div>
