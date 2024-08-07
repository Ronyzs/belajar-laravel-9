<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 50; $i++) {
            $data = [
                'nama' => $faker->name,
                'score' => $faker->numberBetween(0, 100),
                'teacher_id' => $faker->numberBetween(1, 2),
            ];

            DB::table('students')->insert($data);
        }
    }
}
