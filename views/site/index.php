<?php

use yii2fullcalendar\yii2fullcalendar;
use yii\helpers\Html;
?>
<?= Html::a('create Event', ['createevent']) ?>

<?= yii2fullcalendar::widget(['events' => $events, 'options' => ['locale' => 'de-de']])
?>
