<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use kartik\color\ColorInput;
use yii\helpers\Html;
?>

<?php if (Yii::$app->session->hasFlash('Eventsaved')): ?>
    <div class="alert alert-success">
        <?= Yii::t('app', "The Event has been saved.") ?>
    </div>
<?php else : ?>
    <?php if (Yii::$app->session->hasFlash('Eventnotsaved')): ?>
        <?= Yii::t('app', "The Event cannot be saved. Please try agagin.") ?>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'ma_nr')->widget(MaskedInput::class, ['mask' => '99999']) ?>

    <?= $form->field($model, 'ma_name')->textInput() ?>

    <?= $form->field($model, 'date')->widget(MaskedInput::class, ['clientOptions' => ['alias' => 'dd.mm.yyyy']]) ?>
    <?= $form->field($model, 'remind_date')->widget(MaskedInput::class, ['clientOptions' => ['alias' => 'dd.mm.yyyy']]) ?>

    <?=
    $form->field($model, 'text')->textarea();
    ?>


    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php endif; ?>