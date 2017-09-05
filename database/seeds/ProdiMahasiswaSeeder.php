<?php


use Phinx\Seed\AbstractSeed;

class ProdiMahasiswaSeeder extends AbstractSeed
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
        $data = [];
        for ($i=1; $i < 26; $i++) { 
            $data[] = [
                'mahasiswa_id' => $i,
                'prodi_id'     => rand(1,10),
            ];
        }
        $this->insert('prodi_mahasiswa', $data);
    }
}
