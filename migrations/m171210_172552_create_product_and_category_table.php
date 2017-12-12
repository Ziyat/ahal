<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book_and_category`.
 */
class m171210_172552_create_product_and_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%product_and_category}}', [
            'product_id' => $this->integer(),
            'category_id' => $this->integer(),
        ], $tableOptions);

        $this->createIndex('{{%idx-product-id}}', '{{%product_and_category}}', 'product_id');
        $this->createIndex('{{%idx-category-id}}', '{{%product_and_category}}', 'category_id');

        $this->addForeignKey('{{%fkey-product-id}}', '{{%product_and_category}}', 'product_id', '{{%product}}', 'id', 'RESTRICT', 'RESTRICT');
        $this->addForeignKey('{{%fkey-category-id}}', '{{%product_and_category}}', 'category_id', '{{%category}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%book_and_category}}');
    }
}
