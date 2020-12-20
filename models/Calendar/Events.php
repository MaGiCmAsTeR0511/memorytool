<?php

namespace app\models\Calendar;

use Yii;

/**
 * This is the model class for table "Events".
 *
 * @property int $id
 * @property string $title
 * @property int $allDay
 * @property string $start
 * @property string $end
 * @property string $color
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Events';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbcalendar');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'allDay', 'start', 'end', 'color'], 'required'],
            [['allDay'], 'integer'],
            [['start', 'end'], 'safe'],
            [['title'], 'string', 'max' => 500],
            [['color'], 'string', 'max' => 7],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'allDay' => Yii::t('app', 'All Day'),
            'start' => Yii::t('app', 'Start'),
            'end' => Yii::t('app', 'End'),
            'color' => Yii::t('app', 'Color'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return EventsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EventsQuery(get_called_class());
    }
}
