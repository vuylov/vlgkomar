<?php

use yii\db\Schema;
use yii\db\Migration;

class m150319_122919_create_table_product extends Migration
{
    public function up()
    {
        $this->createTable('product', [
            'id'            => 'pk',
            'category_id'  => Schema::TYPE_INTEGER. ' NOT NULL',
            'name'          => Schema::TYPE_STRING.' NOT NULL',
            'detail'        => Schema::TYPE_TEXT,
            'thumb'         => Schema::TYPE_TEXT,
            'radius'        => Schema::TYPE_STRING,
            'price'         => Schema::TYPE_STRING,
            'order'         => Schema::TYPE_INTEGER,
            'keywords'      => Schema::TYPE_TEXT,
            'description'   => Schema::TYPE_TEXT
        ]);

        $this->addForeignKey('FK_category', 'product', 'category_id', 'category', 'id', 'cascade', 'cascade');
    }

    public function down()
    {
        $this->truncateTable('product');
        $this->dropForeignKey('FK_category', 'product');
        $this->dropTable('product');
    }
}
