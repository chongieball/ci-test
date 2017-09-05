<?php


use Phinx\Seed\AbstractSeed;

class AFakultasSeeder extends AbstractSeed
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
            'name' => 'Teknik'
        ];
        $data[] = [
            'name' => 'Kedokteran'
        ];
        $data[] = [
            'name' => 'Ekonomi dan Bisnis'
        ];
        $data[] = [
            'name' => 'Pendidikan'
        ];

        $this->insert('tb_fakultas', $data);
    }
}
