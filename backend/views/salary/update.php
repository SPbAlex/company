<?php

    use console\perm\UserRole;
    use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Salary */

$this->title = 'Update Salary: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="salary-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= UserRole::getRender($this->render('_form', [
        'model' => $model,
    ]), $model, 'update') ?>

</div>
