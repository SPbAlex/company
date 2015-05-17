<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$user = new \console\perm\UserRole();

    $canDelete = true;
    $attributes = [];
    $fields = [
        'id',
        'first_name',
        'last_name',
    ];

    foreach($fields as $field) {
        if($user->can($model::tableName(), $field, 'select')) {
            $attributes []= $field;
        }
        if(!$user->can($model::tableName(), $field, 'update')) {
            $canDelete = false;
        }
    }
?>
<div class="worker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?php if($canDelete) echo Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ])  ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => $attributes
    ]) ?>

</div>
