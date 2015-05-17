<?php
    use common\models\Worker;
    use console\perm\UserRole;
    use yii\helpers\Html;
    use yii\grid\GridView;


    /* @var $this yii\web\View */
    /* @var $searchModel backend\models\WorkerSearch */
    /* @var $dataProvider yii\data\ActiveDataProvider */

    $this->title = 'Workers';
    $this->params['breadcrumbs'][] = $this->title;
?>
<div class="worker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
                             'dataProvider' => $dataProvider,
                             'filterModel'  => $searchModel,
                             'columns'      => UserRole::getAttributes([
                                                                           ['class' => 'yii\grid\SerialColumn'],
                                                                           'id',
                                                                           'first_name',
                                                                           'last_name',
                                                                           ['class' => 'yii\grid\ActionColumn'],
                                                                       ], (new Worker())),
                         ]); ?>

</div>
