<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%documents_permissions}}`.
 */
class m221002_175246_create_documents_permissions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%documents_permissions}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
        ]);

        $this->batchInsert('{{%documents_permissions}}', ['name'], [
            ['Публичный'],
            ['Условно-приватный'],
            ['Приватный'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%documents_permissions}}');
    }
}
