<?php

use yii\db\Schema;
use yii\db\Migration;

class m201220_125923_Events extends Migration
{

    public function init()
    {
        $this->db = 'dbcalendar';
        parent::init();
    }

    public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%Events}}',
            [
                'id'=> $this->primaryKey(11),
                'title'=> $this->string(500)->notNull(),
                'allDay'=> $this->boolean()->notNull(),
                'start'=> $this->datetime()->notNull(),
                'end'=> $this->datetime()->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%Events}}');
    }
}
