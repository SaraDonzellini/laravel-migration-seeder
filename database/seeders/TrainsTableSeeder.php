<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->sentence(2, true);
        $faker->sentence(5, true);
        $faker->sentence(5, true);
        $faker->dateTime();
        $faker->time();
        $faker->time();
        $faker->bothify('???-#####');
        $faker->randomNumber(2, false);
        $faker->boolean();
        $faker->boolean();
    }
}