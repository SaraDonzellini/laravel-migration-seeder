<?php

namespace Database\Seeders;

use App\Models\Train;
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
        for ($i=0; $i < 100; $i++) { 
            $trains = new Train();
            $trains->azienda = $faker->randomElement(['Trenitalia', 'Trenord']);
            $trains->stazione_di_partenza = $faker->sentence(2, true);
            $trains->stazione_di_arrivo = $faker->sentence(2, true);
            $trains->orario_di_partenza = $faker->dateTimeThisMonth();
            $trains->orario_di_arrivo = $faker->dateTimeThisMonth();
            $trains->codice_treno = $faker->bothify('???-#####');
            $trains->numero_di_carrozze = $faker->randomNumber(2, false);
            $trains->in_orario = $faker->boolean();
            $trains->cancellato = $faker->boolean();
            $trains->save();
            
        }
    }
}