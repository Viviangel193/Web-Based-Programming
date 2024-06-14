<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1, 100) as $index) {
            DB::table('72220590')->insert([
                'student_number_590' => $faker->unique()->numerify('###'),
                'student_name_590' => $faker->name,
                'gender_590' => $faker->randomElement(['male', 'female']),
                'gpa_590' => $faker->randomFloat(2, 0, 4),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
