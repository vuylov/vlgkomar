<?php

use yii\db\Schema;
use yii\db\Migration;

class m150319_123818_create_file_table extends Migration
{
    public function up()
    {
        $this->createTable('file', [
            'id'        => 'pk',
            'product_id'=> Schema::TYPE_INTEGER.' NOT NULL',
            'name'      => Schema::TYPE_STRING.' NOT NULL',
            'rawname'   => Schema::TYPE_STRING.' NOT NULL',
            'path'      => Schema::TYPE_TEXT.' NOT NULL',
            'order'     => Schema::TYPE_INTEGER.' DEFAULT 100'
        ]);

        $this->addForeignKey('FK_product', 'file', 'product_id', 'product', 'id', 'cascade', 'cascade');
    }

    public function down()
    {
        $this->truncateTable('file');
        $this->dropForeignKey('FK_product', 'file');
        $this->dropTable('file');
    }
}
