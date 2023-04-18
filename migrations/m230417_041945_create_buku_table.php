<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%buku}}`.
 */
class m230417_041945_create_buku_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%buku}}', [
            'id' => $this->primaryKey(),
            'kode' => $this->string(10)->notNull(),
            'judul' => $this->string(100)->notNull(),
            'penulis' => $this->string(100)->notNull(),
            'penerbit' => $this->string(100)->notNull(),
            'tahun_terbit' => $this->integer(4)->notNull(),
            'id_rak' => $this->integer()->notNull()->unique()
        ]);

        $this->addForeignKey(
            'fk-buku-id_rak',
            'buku',
            'id_rak',
            'rak',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%buku}}');
    }
}
