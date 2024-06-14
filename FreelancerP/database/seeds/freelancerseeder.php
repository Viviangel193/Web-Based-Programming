<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Freelancer;

class FreelancerSeeder extends Seeder
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
            Freelancer::create([
                'nama' => $faker->name,
                'spesialisasi' => $faker->jobTitle,
                'lokasi' => $faker->city,
                'rating' => $faker->randomFloat(2, 0, 5),
                'kontak' => $faker->email
            ]);
        }
    }
}
