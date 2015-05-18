<?php

use yii\db\Schema;
use yii\db\Migration;

class m150517_102230_add_replica_field extends Migration
{
    public function up()
    {
        $this->addColumn('user', 'replica', 'VARCHAR(1) NOT NULL DEFAULT 0');
    }

    public function down()
    {
        $this->dropColumn('user', 'replica');
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
