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
            ]);

            $this->createTable('salary', [
                'id'        => 'int(11) NOT NULL auto_increment PRIMARY KEY',
                'worker_id' => 'int(11) NOT NULL',
                'salary'    => 'VARCHAR(50) NOT NULL',
            ]);
            $this->addForeignKey('worker_id', 'salary', 'worker_id', 'worker', 'id');

            $this->createTable('position', [
                'id'        => 'int(11) NOT NULL auto_increment PRIMARY KEY',
                'worker_id' => 'int(11) NOT NULL',
                'position'  => 'VARCHAR(50) NOT NULL',
            ]);
            $this->addForeignKey('worker', 'position', 'worker_id', 'worker', 'id');
        }

        public function down()
        {
            $this->dropTable('position');
            $this->dropTable('salary');
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
