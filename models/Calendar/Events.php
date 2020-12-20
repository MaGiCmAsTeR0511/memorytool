<?php

namespace app\models\Calendar;

use Yii;

/**
 * This is the model class for table "Events".
 *
 * @property int $id
 * @property string $text
 * @property string $von
 * @property string $bis
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
            [['id', 'text', 'von', 'bis'], 'required'],
            [['id'], 'integer'],
            [['von', 'bis'], 'safe'],
            [['text'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'text' => Yii::t('app', 'Text'),
            'von' => Yii::t('app', 'Von'),
            'bis' => Yii::t('app', 'Bis'),
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
