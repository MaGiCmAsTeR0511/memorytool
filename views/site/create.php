<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Memory\Memory */

$this->title = Yii::t('app', 'Create Memory');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Memories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="memory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
