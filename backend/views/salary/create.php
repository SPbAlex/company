<?php

    use console\perm\UserRole;
    use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Salary */

$this->title = 'Create Salary';
$this->params['breadcrumbs'][] = ['label' => 'Salaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="salary-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= UserRole::getRender($this->render('_form', [
        'model' => $model,
    ]), $model, 'insert') ?>

</div>
