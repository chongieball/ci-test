<?php


use Phinx\Migration\AbstractMigration;

class CreateTableProdiMahasiswa extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $data = $this->table('prodi_mahasiswa', ['id' => false]);
        $data->addColumn('mahasiswa_id', 'integer')
             ->addColumn('prodi_id', 'integer')
             ->addForeignKey('mahasiswa_id', 'tb_mahasiswa', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
             ->addForeignKey('prodi_id', 'tb_prodi', 'id', ['delete' => 'CASCADE', 'update' => 'NO_ACTION'])
             ->create();
    }
}
