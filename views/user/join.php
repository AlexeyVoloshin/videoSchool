<?php
    use yii\widgets\ActiveForm;
    use yii\helpers\Html;
?>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h1>Join us</h1>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id' => 'user-join-form']); ?>
            <?= $form->field($userJoinForm, 'name')->textInput(['style' => 'width: 30%']) ?>
            <?= $form->field($userJoinForm, 'email')->textInput(['style' => 'width: 30%']) ?>
            <?= $form->field($userJoinForm, 'password')->passwordInput()->textInput(['style' => 'width: 30%']) ?>
            <?= $form->field($userJoinForm, 'password2')->passwordInput()->textInput(['style' => 'width: 30%']) ?>
            <?= Html::submitButton('Create',
                    ['class' => 'btn btn-danger']) ?>
        <?php ActiveForm::end(); ?>
    </div>
</div>