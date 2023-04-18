<?php

use yii\db\Migration;

use function PHPUnit\Framework\assertNotNull;

/**
 * Handles the creation of table `{{%peminjaman}}`.
 */
class m230417_042116_create_peminjaman_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%peminjaman}}', [
            'id' => $this->primaryKey(),
            'tanggal_pinjam' => $this->date()->notNull(),
            'tanggal_kembali' => $this->date()->notNull(),
            'id_buku' => $this->integer()->notNull()->unique(),
            'id_anggota' => $this->integer()->notNull()->unique()
        ]);

        $this->addForeignKey(
            'fk-peminjaman-id_buku',
            'peminjaman',
            'id_buku',
            'buku',
            'id'
        );

        $this->addForeignKey(
            'fk_peminjaman-id_anggota',
            'peminjaman',
            'id_anggota',
            'anggota',
            'id'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%peminjaman}}');
    }
}
