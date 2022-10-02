<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%documents}}`.
 */
class m221002_175255_create_documents_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%documents}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'permission_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'updated_at' => $this->timestamp(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'FK_documents_user',
            'documents',
            'user_id',
            'user',
            'id',
        );

        $this->addForeignKey(
            'FK_documents_permissions',
            'documents',
            'permission_id',
            'documents_permissions',
            'id',
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_documents_permissions', 'documents');
        $this->dropTable('{{%documents}}');
    }
}
