<?php

use yii\db\Migration;

/**
 * Class m201220_185804_create_table_Events
 */
class m201220_185804_create_table_Events extends Migration
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
                'color' => $this->string(7)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%Events}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201220_185804_create_table_Events cannot be reverted.\n";

        return false;
    }
    */
}
