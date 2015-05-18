<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ForbiddenAuditSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forbidden Audits';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forbidden-audit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Forbidden Audit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'table_name',
            'operation_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
