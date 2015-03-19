<?php

use yii\db\Schema;
use yii\db\Migration;

class m150319_121858_create_type_table extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id'            => 'pk',
            'name'          => Schema::TYPE_STRING.' NOT NULL',
            'detail'        => Schema::TYPE_TEXT,
            'thumb'         => Schema::TYPE_TEXT,
            'keywords'      => Schema::TYPE_TEXT,
            'description'   => Schema::TYPE_TEXT
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
