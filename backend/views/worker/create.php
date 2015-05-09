<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Worker */

$this->title = 'Create Worker';
$this->params['breadcrumbs'][] = ['label' => 'Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
    $user = new \console\perm\UserRole();
    $attributes = [];
    $fields = [
        'first_name',
        'last_name',
        'salary',
    ];
    foreach($fields as $field) {
        if(!$user->can($model::tableName(), $field, 'insert')) {
            $attributes []= $field;
        }
    }
?>
<div class="worker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= /*$this->render('_form', [
        'model' => $model,
    ]) */''?>

    <?php
        $form = $this->render('_form', [
            'model' => $model,
        ]);
        //<input type="text" id="worker-last_name" class="form-control" name="Worker[last_name]" maxlength="50">
        foreach($attributes as $attribute) {
            $marker = '<input type="text" id="worker-' . $attribute .'" class="form-control" name="Worker['. $attribute .']" maxlength="50">';
            $form = str_replace($marker, '', $form);
        }
        echo $form;
      /*  $fal = null;
        $udateForm = (String)$this->render('_form', [
            'model' => $model,
        ]);
        $marker = 0;
        $fin = '<input type="text" id="' . $model::tableName() . '-';
        while(strpos($udateForm, $fin, $marker) != false) {

            $marker = strpos($udateForm, $fin, $marker) + strlen($fin);
            $fal = substr($udateForm, $marker, strpos($udateForm, '"', $marker) - $marker);

            if (array_search($fal, $attributes) == false) {
                $form = substr($udateForm, 0,$marker - strlen($fin));
                $marker = strpos($udateForm, '>', $marker) + 1;
                $form .= substr($udateForm, $marker, 100000);
                $udateForm = $form;
            }
        }
        echo $udateForm;*/

    ?>

</div>
