<?php

    use yii\db\Schema;
    use yii\db\Migration;

    class m150412_153335_add_simple_data extends Migration
    {
        public function up()
        {
            $this->createTable('worker', [
                'id'         => 'int(11) NOT NULL auto_increment PRIMARY KEY',
                'first_name' => 'VARCHAR(50) NOT NULL',
                'last_name'  => 'VARCHAR(50) NOT NULL',
                'salary'     => 'VARCHAR(50) NOT NULL',
            ]);
        }

        public function down()
        {
            $this->dropTable('worker');
        }

        /*
        // Use safeUp/safeDown to run migration code within a transaction
        public function safeUp()
        {
        }

        public function safeDown()
        {
        }
        */
    }
