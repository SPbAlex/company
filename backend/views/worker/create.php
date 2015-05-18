<?php

    use console\perm\UserRole;
    use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Create Worker';
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="worker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= UserRole::getRender($this->render('_form', [
        'model' => $model,
    ]), $model, 'insert') ?>

</div>
