<?php


use Phinx\Seed\AbstractSeed;

class CMahasiswaSeeder extends AbstractSeed
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
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 25; $i++) { 
            $data[] = [
                'nim'   => rand(100000, 999999),
                'name'  => $faker->name,
            ];
        }

        $this->insert('tb_mahasiswa', $data);
    }
}
