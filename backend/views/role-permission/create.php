<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\RolePermission */

$this->title = 'Create Role Permission';
$this->params['breadcrumbs'][] = ['label' => 'Role Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-permission-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
