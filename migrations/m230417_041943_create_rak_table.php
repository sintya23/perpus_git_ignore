<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%rak}}`.
 */
class m230417_041943_create_rak_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%rak}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(100)->notNull(),
            'lokasi' => $this->string(100)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%rak}}');
    }
}
