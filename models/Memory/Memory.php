<?php

namespace app\models\Memory\Memory;

use Yii;

/**
 * This is the model class for table "{{%memory}}".
 *
 * @property int $id
 * @property int $ma_nr
 * @property string $ma_name
 * @property string $date
 * @property string $remind_date
 * @property string $text
 */
class Memory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%memory}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('dbmemory');
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ma_nr', 'ma_name', 'datum', 'remind_date', 'text'], 'required'],
            [['ma_nr'], 'integer'],
            [['date', 'remind_date'], 'safe'],
            [['ma_name'], 'string', 'max' => 100],
            [['text'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ma_nr' => Yii::t('app', 'Ma Nr'),
            'ma_name' => Yii::t('app', 'Ma Name'),
            'date' => Yii::t('app', 'Date'),
            'remind_date' => Yii::t('app', 'Remind Date'),
            'text' => Yii::t('app', 'Text'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return MemoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MemoryQuery(get_called_class());
    }
}
