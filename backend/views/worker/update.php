<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Update Worker: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
$user = new \console\perm\UserRole();

$attributes = [];
$fields = [
    'first_name',
    'last_name',
];
    foreach($fields as $field) {
        if($user->can($model::tableName(), $field, 'update')) {
            $attributes []= $field;
        }
    }
   // var_dump($attributes);
?>
<div class="worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= /*$this->render('_form', [
        'model' => $model,
    ]) */''?>

<?php
    $fal = null;
    $udateForm = (String)$this->render('_form', [
        'model' => $model,
    ]);
    foreach($fields as $field) {
        $str = '<div class="form-group field-' . $model::tableName() . '-' . $field;
        if(array_search($field, $attributes) === false) {
            $marker = strpos($udateForm, $str);
            $rep = substr($udateForm, $marker, strpos($udateForm, '<div', $marker + strlen($str)) - $marker);
            $udateForm = str_replace($rep, '', $udateForm);
        }
    }
    echo $udateForm;
?>

    </div>
