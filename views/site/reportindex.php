<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Memory\MemorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Memories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memory-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(['id' => 'report']); ?>
    <div class="row">
        <div class="col col-md-5">
            <label class="control-label"><?= Yii::t('app', 'Daterange') ?> </label>
            <?=
            DatePicker::widget([
                'language' => 'de',
                'name' => 'from_date',
                'type' => DatePicker::TYPE_RANGE,
                'name2' => 'to_date',
                'pluginOptions' => [
                    'autoclose' => true,
                    'format' => 'dd.mm.yyyy'
                ]
            ]);
            ?>
        </div>
        <label class="control-label"></label>
        <div class="form-group">
            <?= Html::button(Yii::t('app', 'generate Report'), ['class' => 'btn btn-success report']) ?>
        </div>
    </div>
    <div class="response"></div>
    <?php ActiveForm::end(); ?>
</div>



