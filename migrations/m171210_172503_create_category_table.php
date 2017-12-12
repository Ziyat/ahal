<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171210_172503_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'parent_id' => $this->integer(),
        ],$tableOptions);

        $this->addForeignKey('{{%fkey-parent-id}}', '{{%category}}', 'parent_id', '{{%category}}', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('{{%category}}');
    }
}
