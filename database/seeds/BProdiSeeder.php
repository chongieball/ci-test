<?php


use Phinx\Seed\AbstractSeed;

class BProdiSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data[] = [
            'fakultas_id'   => 1,
            'name'          => 'Teknik Sipil',      
        ];
        $data[] = [
            'fakultas_id'   => 1,
            'name'          => 'Teknik Informatika',      
        ];
        $data[] = [
            'fakultas_id'   => 1,
            'name'          => 'Teknik Mesin',      
        ];
        $data[] = [
            'fakultas_id'   => 2,
            'name'          => 'Dokter Gigi',      
        ];
        $data[] = [
            'fakultas_id'   => 2,
            'name'          => 'Dokter Hewan',      
        ];
        $data[] = [
            'fakultas_id'   => 3,
            'name'          => 'Ekonomi Pembangunan',      
        ];
        $data[] = [
            'fakultas_id'   => 3,
            'name'          => 'Manajemen',      
        ];
        $data[] = [
            'fakultas_id'   => 4,
            'name'          => 'Bahasa Inggris',      
        ];
        $data[] = [
            'fakultas_id'   => 4,
            'name'          => 'Bahasa Indonesia',      
        ];
        $data[] = [
            'fakultas_id'   => 4,
            'name'          => 'Matematika',      
        ];
        $this->insert('tb_prodi', $data);
    }
}
