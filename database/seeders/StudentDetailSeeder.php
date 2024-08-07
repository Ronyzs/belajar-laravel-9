<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // for ($i = 0; $i <= 50; $i++) {
        //     $data = [
        //         'nama' => $faker->name,
        //         'score' => $faker->numberBetween(18, 60),
        //     ];

        DB::table('student_detail')->insert([
            'student_id' => 38,
            'phone' => $faker->phoneNumber(),
            'address' => $faker->address()
        ]);
        // }
    }
}
