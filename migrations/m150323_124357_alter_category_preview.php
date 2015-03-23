<?php

use yii\db\Schema;
use yii\db\Migration;

class m150323_124357_alter_category_preview extends Migration
{
    public function up()
    {
        $this->addColumn('category', 'preview', Schema::TYPE_TEXT);
    }

    public function down()
    {
        $this->dropColumn('category', 'preview');
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
