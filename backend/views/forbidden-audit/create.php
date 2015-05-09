<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ForbiddenAudit */

$this->title = 'Create Forbidden Audit';
$this->params['breadcrumbs'][] = ['label' => 'Forbidden Audits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forbidden-audit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
