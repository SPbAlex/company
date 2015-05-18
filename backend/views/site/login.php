<?php
use yii\helpers\Html;
use yii\web\JqueryAsset;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(Yii::getAlias('@web/script/login_pass.js'), ['depends' => JqueryAsset::className()]);

?>
<div class="site-login">

    <div class="row">
        <div class="col-lg-6">

            <h1><?= Html::encode($this->title) ?></h1>

            <p>Please fill out the following fields to login:</p>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <?= $form->field($model, 'username') ?>
            <?= $form->field($model, 'password')->passwordInput() ?>
            <?= $form->field($model, 'password_reset_token')->hiddenInput()->label(false) ?>
            <?= $form->field($model, 'replica')->hiddenInput()->label(false) ?>
            <div class="form-group">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
            <?php ActiveForm::end(); ?>

            <table border="1px" borderColor="white" width="100" height="100" id="replica-t">
                <td
                </td>
            </table>
        </div>
        <div class="col-lg-6" id="hidden_log">
            <h3>Enter your graphic key and click Login</h3>

            <p>Luke, use the force!</p>
            <table border="1px" borderColor="white" width="400" height="400" id="mytable">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
