<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
<div class="panel panel_info">
    <div class="panel-heading">
        <h1>Log in</h1>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'user-login-form']); ?>
        <?= $form->field($userLoginForm, 'email')->textInput(['style' => 'width: 30%']) ?>
        <?= $form->field($userLoginForm, 'password')->passwordInput()->textInput(['style' => 'width: 30%']) ?>
        <?= Html::submitButton('Enter',
            ['class' => 'btn btn-primary']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>