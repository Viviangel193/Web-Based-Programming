<?php

use Illuminate\Database\Seeder;
use App\Student72220590;
use Faker\Factory as Faker;

class Student72220590Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Student72220590::create([
                'student_number_590' => $faker->unique()->numerify('###'),
                'student_name_590' => $faker->name,
                'gender_590' => $faker->randomElement(['male', 'female']),
                'gpa_590' => $faker->randomFloat(2, 0, 4)
            ]);
        }
    }
}
