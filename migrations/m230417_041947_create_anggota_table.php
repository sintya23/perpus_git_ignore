<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%anggota}}`.
 */
class m230417_041947_create_anggota_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%anggota}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(50)->notNull(),
            'nis' => $this->string(10)->notNull(),
            'kelas' => $this->string(50)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%anggota}}');
    }
}
