<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Memory\Memory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="memory-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ma_nr')->widget(MaskedInput::class,['mask' => '99999']) ?>

    <?= $form->field($model, 'ma_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->widget(MaskedInput::class,['clientOptions' => ['alias' => 'dd.mm.yyyy']]) ?>

    <?= $form->field($model, 'remind_date')->widget(MaskedInput::class,['clientOptions' => ['alias' => 'dd.mm.yyyy']]) ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
