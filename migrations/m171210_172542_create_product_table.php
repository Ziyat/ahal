<?php

use yii\db\Migration;

/**
 * Handles the creation of table `book`.
 */
class m171210_172542_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'desc' => $this->string()->notNull(),
            'price' => $this->string(),
            'pictures' => $this->string(),
            'status' => $this->boolean(),
            'created_at' => $this->string(),
            'updated_at' => $this->string(),
        ],$tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%product}}');
    }
}
