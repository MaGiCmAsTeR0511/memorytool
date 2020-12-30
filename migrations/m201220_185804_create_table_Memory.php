<?php

use yii\db\Migration;

/**
 * Class m201220_185804_create_table_Events
 */
class m201220_185804_create_table_Memory extends Migration
{
     public function init()
    {
        $this->db = 'dbmemory';
        parent::init();
    }
    
     public function safeUp()
    {
        $tableOptions = 'ENGINE=InnoDB';

        $this->createTable(
            '{{%Memory}}',
            [
                'id'=> $this->primaryKey(11),
                'ma_nr'=> $this->integer(5)->notNull(),
                'ma_name' => $this->string(100)->notNull(),
                'date'=> $this->date()->notNull(),
                'remind_date'=> $this->date()->notNull(),
                'text' => $this->string(1000)->notNull(),
            ],$tableOptions
        );

    }

    public function safeDown()
    {
        $this->dropTable('{{%Memory}}');
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
