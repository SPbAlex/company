<?php

use yii\db\Schema;
use yii\db\Migration;

class m150518_094405_add_valid_field extends Migration
{
    public function up()
    {
        $this->addColumn('worker', 'valid', 'VARCHAR(1) NOT NULL DEFAULT 1');
        $this->addColumn('salary', 'valid', 'VARCHAR(1) NOT NULL DEFAULT 1');
        $this->addColumn('position', 'valid', 'VARCHAR(1) NOT NULL DEFAULT 1');
    }

    public function down()
    {
        $this->dropColumn('worker', 'valid');
        $this->dropColumn('salary', 'valid');
        $this->dropColumn('position', 'valid');
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
