<?php

use yii\db\Schema;
use yii\db\Migration;

class m150323_113736_alter_table_preview extends Migration
{
    public function up()
    {
        $this->addColumn('product', 'preview', Schema::TYPE_TEXT);
    }

    public function down()
    {
        $this->dropColumn('product', 'preview');
    }
}
