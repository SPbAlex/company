<?php

    use yii\db\Schema;
    use yii\db\Migration;

    class m150426_160239_add_audit extends Migration
    {
        public function up()
        {
            $this->createTable('audit', [
                'id'             => 'int(11) NOT NULL auto_increment PRIMARY KEY',
                'user_id'        => 'int(11) NOT NULL',
                'table_name'     => 'VARCHAR(50) NOT NULL',
                'operation_name' => 'VARCHAR(50) NOT NULL',
                'date'           => 'VARCHAR(12) NOT NULL',
            ]);
            $this->createIndex('unique', 'audit', [
                    'user_id',
                    'table_name',
                    'operation_name',
                    'date'
                ], true);

            $this->createTable('forbidden_audit', [
                'id'             => 'int(11) NOT NULL auto_increment PRIMARY KEY',
                'table_name'     => 'VARCHAR(50) NOT NULL',
                'operation_name' => 'VARCHAR(50) NOT NULL',
            ]);
            $this->createIndex('unique', 'forbidden_audit', [
                'table_name',
                'operation_name',
            ], true);
            $this->insert('forbidden_audit', ['table_name' => 'user', 'operation_name' => 'select']);
            $this->insert('forbidden_audit', ['table_name' => 'user', 'operation_name' => 'update']);
            $this->insert('forbidden_audit', ['table_name' => 'user', 'operation_name' => 'insert']);
            $this->insert('forbidden_audit', ['table_name' => 'user', 'operation_name' => 'delete']);
        }

        public function down()
        {
            $this->dropTable('audit');
            $this->dropTable('forbidden_audit');
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
